<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (! Schema::hasTable('feedbacks')) {
            return;
        }

        if (Schema::hasColumn('feedbacks', 'feedback_message__type')
            && ! Schema::hasColumn('feedbacks', 'feedback_message_type')) {
            Schema::table('feedbacks', function (Blueprint $table) {
                $table->renameColumn('feedback_message__type', 'feedback_message_type');
            });
        }

        if (Schema::hasColumn('feedbacks', 'feedback_message_type')) {
            Schema::table('feedbacks', function (Blueprint $table) {
                $table->string('feedback_message_type')->change();
            });
        }
    }

    public function down(): void
    {
        if (! Schema::hasTable('feedbacks')
            || ! Schema::hasColumn('feedbacks', 'feedback_message_type')) {
            return;
        }

        DB::table('feedbacks')
            ->whereNotIn('feedback_message_type', ['Saran', 'Kritik', 'Masukan'])
            ->update(['feedback_message_type' => 'Masukan']);

        Schema::table('feedbacks', function (Blueprint $table) {
            $table->enum('feedback_message_type', ['Saran', 'Kritik', 'Masukan'])
                ->change();
            $table->renameColumn('feedback_message_type', 'feedback_message__type');
        });
    }
};
