<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/*

DROP TABLE IF EXISTS `pw_bbs_threads_digest_index`;
CREATE TABLE `pw_bbs_threads_digest_index` (
  `tid` int(10) unsigned NOT NULL,
  `fid` smallint(5) unsigned NULL DEFAULT '0',
  `disabled` tinyint(3) unsigned NULL DEFAULT '0',
  `cid` smallint(5) unsigned NULL DEFAULT '0',
  `topic_type` int(10) unsigned NULL DEFAULT '0',
  `created_time` int(10) unsigned NULL DEFAULT '0',
  `lastpost_time` int(10) unsigned NULL DEFAULT '0',
  `operator` varchar(15) NULL DEFAULT '',
  `operator_userid` int(10) unsigned NULL DEFAULT '0',
  `operator_time` int(10) unsigned NULL DEFAULT '0',
  PRIMARY KEY (`tid`),
  KEY `idx_cid_lastposttime` (`cid`,`lastpost_time`),
  KEY `idx_fid_lastposttime_topictype` (`fid`,`lastpost_time`,`topic_type`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='精华帖子索引表';

 */

class PwBbsThreadsDigestIndexTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function run()
    {
        Schema::create('pw_bbs_threads_digest_index', function (Blueprint $table) {
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
        Schema::dropIfExists('pw_bbs_threads_digest_index');
    }
}

