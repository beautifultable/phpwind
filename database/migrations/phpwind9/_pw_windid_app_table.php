<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/*


DROP TABLE IF EXISTS `pw_windid_app`;
CREATE TABLE `pw_windid_app` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NULL DEFAULT '',
  `siteurl` varchar(128) NULL DEFAULT '',
  `siteip` varchar(20) NULL DEFAULT '',
  `secretkey` varchar(50) NULL DEFAULT '',
  `apifile` varchar(128) NULL DEFAULT '' COMMENT '通知接收文件',
  `charset`  varchar(16) NULL DEFAULT '' COMMENT '客户端编码',
  `issyn` tinyint(1) unsigned NULL DEFAULT '0',
  `isnotify` tinyint(1) unsigned NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='应用数据表';

 */

class PwWindidAppTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function run()
    {
        Schema::create('pw_windid_app', function (Blueprint $table) {
            if (env('DB_CONNECTION', false) === 'mysql') {
                $table->engine = 'InnoDB';
            }
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pw_windid_app');
    }
}

