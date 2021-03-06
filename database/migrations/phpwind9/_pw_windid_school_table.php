<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/*

DROP TABLE IF EXISTS `pw_windid_school`;
CREATE TABLE `pw_windid_school` (
  `schoolid` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '学校ID',
  `name` varchar(32) NULL DEFAULT '' COMMENT '学校名字',
  `areaid` int(10) NULL DEFAULT '0' COMMENT '地区ID',
  `typeid` tinyint(3) NULL DEFAULT '0' COMMENT '类型：大学/高中/初中',
  `first_char` char(1) NULL DEFAULT '' COMMENT '学校名字的首字母',
  PRIMARY KEY (`schoolid`),
  KEY `idx_areaid_firstchar` (`areaid`,`first_char`),
  KEY `idx_name_firstchar` (`name`,`first_char`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='统一的windid学校库';

 */

class PwWindidSchoolTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function run()
    {
        Schema::create('pw_windid_school', function (Blueprint $table) {
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
        Schema::dropIfExists('pw_windid_school');
    }
}

