<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/*

DROP TABLE IF EXISTS `pw_user_tag`;
CREATE TABLE `pw_user_tag` (
  `tag_id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '个性标签ID',
  `name` varchar(20) NULL DEFAULT '' COMMENT '个性标签名字',
  `ifhot` tinyint(1) unsigned NULL DEFAULT '0' COMMENT '是否是热门标签',
  `used_count` int(10) unsigned NULL DEFAULT '0' COMMENT '被使用次数',
  PRIMARY KEY (`tag_id`),
  UNIQUE KEY `idx_name` (`name`),
  KEY `idx_usedcount` (`used_count`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='用户个人标签基本信息表';

 */

class PwUserTagTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function run()
    {
        Schema::create('pw_user_tag', function (Blueprint $table) {
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
        Schema::dropIfExists('pw_user_tag');
    }
}

