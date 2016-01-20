<?php
/**
 * Yii2 SQL Comment
 *
 * add comment for sql.
 *
 * support database:
 *
 * - MySQL
 *
 * @category  Web-yii2
 * @package   yii2-sqlcomment
 * @author    scsidisk <scsidisk@gmail.com>
 * @copyright 2015-2016 scsidisk <scsidisk@gmail.com>
 * @license   http://opensource.org/licenses/MIT MIT Public
 * @version   0.0.1
 * @link      http://scsidisk.github.io
 *
 */

namespace scsidisk\yii2\sqlcomment;

use Yii;
use yii\db\Command;
use yii\db\Connection;

/**
 * CMConnection class
 */
class CMConnection extends Connection
{

    public function createCommand($sql = null, $params = [])
    {
        $sql     = $this->addComment($sql);
        $command = new Command([
            'db'  => $this,
            'sql' => $sql,
        ]);

        return $command->bindValues($params);
    }

    private function addComment($sql = null)
    {
        if (empty($sql)) {
            return $sql;
        }

        $stamp = '';
        if (PHP_SAPI == 'cli') {
            $stamp = !empty(Yii::$app->requestedRoute) ?
            Yii::$app->requestedRoute : 'cli';
        } else {
            $url_path = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);
            $rule     = explode('/', $url_path, 5);

            $stamp = !empty($rule[1]) ? $rule[1] : $stamp;
            $stamp .= !empty($rule[2]) ? '_' . $rule[2] : '';
            if (!empty($rule[3])) {
                $act = explode('?', $rule[3]);
                $stamp .= '_' . $act[0];
            }
        }
        $app_id = !empty(Yii::$app->id) ?
        Yii::$app->id : 'test';

        // $sql = $sql . '/*' . Yii::$app->id . ':' . $stamp . '*/';
        $sql = $sql . '/*' . $app_id . ':' . $stamp . '*/';

        return $sql;

    }

}
