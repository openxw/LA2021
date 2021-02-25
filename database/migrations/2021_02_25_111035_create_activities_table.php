<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActivitiesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('activities', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name', 191);
			$table->string('image', 100);
			$table->string('user_roles', 100)->default('0')->comment('可以参与活动的会员角色集合，多个以逗号分隔');
			$table->string('intro')->comment('活动简介');
			$table->text('details');
			$table->dateTime('start_at')->nullable();
			$table->dateTime('end_at')->nullable();
			$table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
			$table->string('location', 191);
			$table->decimal('fee', 10)->default(0.00);
			$table->smallInteger('involves')->unsigned()->comment('参与人数');
			$table->smallInteger('involves_min')->unsigned()->comment('最低参与人数');
			$table->smallInteger('involves_max')->unsigned()->comment('最多参与人数');
			$table->boolean('status')->default(0)->comment('活动状态：-1：审核不通过 0：未开始 1：审核中 2：进行中 3：成功 4：结束');
			$table->string('organizers', 100)->comment('活动主办方');
			$table->integer('views')->default(0);
			$table->integer('collectors_num')->default(0)->comment('被收藏的数量');
			$table->boolean('is_stick')->default(0)->comment('是否置顶：0-不置顶，1-置顶');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('activities');
	}

}
