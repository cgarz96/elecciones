<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		DB::table('users')->insert([
		           	['name' => 'admin',
		           	'email' => 'admintest@gmail.com',
		            'password' => Hash::make('1234')
		            ]
		]);

		DB::table('candidatos')->insert([
		           	['candidato' => 'FACU + Tania Rogel y Carlos Sant',
		           	'categoria_electoral_id' => 0
		            ],
	           		['candidato' => 'CONSENSO UNLAR (Daniel Quiroga y María Corzo)',
		           	'categoria_electoral_id' => 0
		            ],
		           	['candidato' => 'Frente de Integración Regional(Alicia Leiva y José Vera Díaz)',
			           	'categoria_electoral_id' => 0
			        ],
		           	['candidato' => 'Frente para Todos UNLaR(Alejandro Álvarez y Beatriz Córdoba)',
			           	'categoria_electoral_id' => 0
			        ],
		           	['candidato' => 'Somos Aplicada',
			           	'categoria_electoral_id' => 0
			        ],
		           	['candidato' => 'UNLaR Unidos Salud',
			           	'categoria_electoral_id' => 0
			        ],
		           	['candidato' => 'Somos Salud',
			           	'categoria_electoral_id' => 0
			        ],
		           	['candidato' => 'VOTOS EN BLANCO',
			           	'categoria_electoral_id' => 0
			        ],
		           	['candidato' => 'VOTOS RECURRIDOS',
			           	'categoria_electoral_id' => 0
			        ],
		           	['candidato' => 'VOTOS NULOS',
			           	'categoria_electoral_id' => 0
			        ]
		        ]);

		DB::table('categoria_electorals')->insert([
		           	[
		           	'categoria_electoral' => 'RECTOR Y VICE'
		            ],
		           	[
		           	'categoria_electoral' => 'CONSILIARIOS/AS'
		            ],
		           	[
		           	'categoria_electoral' => 'DECANO/A'
		            ],
		           	[
		           	'categoria_electoral' => 'CONSEJERAS/OS DEPARTAMENTALES'
		            ],
		           	[
		           	'categoria_electoral' => 'DIRECTORES DE CARRERAS'
		            ]
		]);
		DB::table('departamentos')->insert([
		           	[
		           	'departamento' => 'Ciencias de la Salud','sede_id'=>0
		            ],
		           	[
		           	'departamento' => 'Ciencias Humanas y de la Educación','sede_id'=>0
		            ],
		           	[
		           	'departamento' => 'Ciencias Sociales, Jurídicas y Económicas','sede_id'=>0
		            ],
		           	[
		           	'departamento' => 'Ciencias y Tecnologías Aplicadas a la Producción, al Ambiente y al Urbanismo','sede_id'=>0
		            ],
		           	[
		           	'departamento' => 'Ciencias Exactas, Físicas y Naturales','sede_id'=>0
		            ],

		]);
		DB::table('estamentos')->insert([
		           	[
		           	'estamento' => 'DOCENTE'
		            ],
		           	[
		           	'estamento' => 'NO DOCENTE'
		            ],
		           	[
		           	'estamento' => 'ESTUDIANTE'
		            ],
		           	[
		           	'estamento' => 'GRADUADO'
		            ]
		]);
		DB::table('sedes')->insert([
		           	[
		           	'sede' => 'CAPITAL'
		            ],
		           	[
		           	'sede' => 'CHAMICAL'
		            ],
		           	[
		           	'sede' => 'VILLA UNIÓN'
		            ],
		           	[
		           	'sede' => 'AIMOGASTA'
		            ],
		           	[
		           	'sede' => 'CHEPES'
		            ],
		           	[
		           	'sede' => 'CATUNA'
		            ]
		]);
    }
}
