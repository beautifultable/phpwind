<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/*

DROP TABLE IF EXISTS `pw_design_permissions`;
CREATE TABLE `pw_design_permissions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'ID标识',
  `design_type` tinyint(1) unsigned NULL DEFAULT '0' COMMENT '设计类型1页面，2模块',
  `design_id` int(10) unsigned NULL DEFAULT '0' COMMENT '设计类型的标识ID',
  `uid` int(10) unsigned NULL DEFAULT '0' COMMENT '用户ID',
  `permissions` tinyint(1) unsigned NULL DEFAULT '0' COMMENT '权限级别',
  PRIMARY KEY (`id`),
  KEY `uid` (`uid`),
  KEY `idx_designtype_designid_uid` (`design_type`,`design_id`,`uid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='设计权限表';

 */

class PwDesignPermissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function run()
    {
        Schema::create('pw_design_permissions', function (Blueprint $table) {
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
        Schema::dropIfExists('pw_design_permissions');
    }
}

