<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\BikeModel;

class CreateBikeModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bike_models', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('image');
            $table->integer('company_id');
            $table->integer('rating')->default(0);
            $table->integer('no_of_reviews')->default(0);
            $table->string('engine_type')->nullable();
            $table->string('displacement')->nullable();
            $table->string('bore_stroke')->nullable();
            $table->string('compression_ratio')->nullable();
            $table->string('clutch')->nullable();
            $table->string('transmission')->nullable();
            $table->integer('price')->nullable();
            $table->string('body_type')->nullable();

            $table->timestamps();
        });

        $companies = [  'Honda'=>['CD 70','CB 150F', 'Pridor', 'CG 125 Deluxe','CD 70 Dream','CB 125F'],
                        'Yamaha'=>['YBR 125','YBR 125G' ,'YB 125Z','Royale YB 100','YZF-R6','YZF-R1'],
                        'Sazuki'=>['GS 150','GD 110S','GR 150','GS 150 SE','GSX-R600','Hayabusa', 'GD 110'],
                        'Chinese Bike'=>['OW Ninja 250cc','150cc','70','125','Lifan','OW R3 250cc'],
                        'United'=>['US 70','US 125','US 100','US Scooty 100','US 125 Deluxe','US 150 Ultimate'],
                        'Road Prince'=>['RP 70 Passion','Wego 150','RP 110','RP 125 Euro II','Bullet', 'Robinson 150'],
                        'Kawasaki'=>['Ninja 250R','GTO 125','GTO 100','GTO 110','Ninja ZX-10R'],
                        'Super Power'=>['SP 70','Leo 200','SP 150 Archi','SP-100','PK 150 Archi','Sultan SP 250'],
                        'Hi Speed'=>['Infinity 150','CDI SR-70CC EURO-2'],
                        'Unique'=>['Xtreme UD 70','UD 100','UD 125','Crazer UD-150'],
                        'Benelli'=>['TNT 25','TNT 150i','302 R','180S','TNT 600','TRK 251'],
                        'Vespa'=>['150cc','PIAGGIO','P150x'],
                        'ZXMCO'=>['KPR 200 Cruise','ZX 70 City Rider','Monster ZX 250-D','ZX 125','ZX 70 Thunder Plus','ZX 100 Power Max','ZX 125 Stallion'],
                        'Sigma'=>['Valentino 350','Skyline 250','Gladiator 200','Thunder 150','VALENTINO 150cc','ELIGATOR 250CC','Valentino 250'],
                        'Harley Davidson'=>['Iron 883','883 Low','Night Rod Special','1200 Custom','883 Custom','Ultra Classic'],
                    ];
                    $count = 0;
        foreach ($companies as $key => $company) {
            $count = $count + 1;
            foreach ($company as $key2 => $model) {
                BikeModel::create(['name'=>$model, 'company_id'=>$count, 'image'=>'bike.png']);

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
        Schema::dropIfExists('bike_models');
    }
}
