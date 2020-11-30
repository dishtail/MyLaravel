<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateTDbAdmins extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_db_admins', function (Blueprint $table) {
            $table->increments('id')->comment('编号');
            $table->string('nickname',32)->comment('名称');
            $table->integer('phone')->comment('手机号码');
            $table->string('password',191)->comment('密码');
            $table->string('email')->nullable()->comment('邮箱');
            $table->string('avatar',255)->nullable()->default('')->comment('头像');
            $table->tinyInteger('is_enable')->default(1)->comment('是否可用 1可用 2不可用');
            $table->string('creator',32)->comment('创建人');
            $table->string('modifier',32)->nullable()->comment('修改人');
            $table->timestamp('created_at')->comment('创建时间');
            $table->timestamp('updated_at')->nullable()->comment('修改时间');
        });
        DB::statement("ALTER TABLE `t_db_admins` comment '管理员信息表'");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t_db_admins');
    }
}
