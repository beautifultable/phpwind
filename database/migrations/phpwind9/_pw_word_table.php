<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/*

DROP TABLE IF EXISTS `pw_word`;
CREATE TABLE `pw_word` (
  `word_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT COMMENT '敏感词自增长ID',
  `word_type` tinyint(3) unsigned NULL DEFAULT '0' COMMENT '敏感词类型',
  `word` varchar(100) NULL DEFAULT '' COMMENT '敏感词',
  `word_replace` varchar(100) NULL DEFAULT '' COMMENT '敏感词替换',
  `word_from` tinyint(3) unsigned NULL DEFAULT '0' COMMENT '敏感词来源',
  `created_time` int(10) unsigned NULL DEFAULT '0' COMMENT '敏感词创建时间',
  PRIMARY KEY (`word_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='敏感词表';

 */

class PwWordTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function run()
    {
        Schema::create('pw_word', function (Blueprint $table) {
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
        Schema::dropIfExists('pw_word');
    }
}

