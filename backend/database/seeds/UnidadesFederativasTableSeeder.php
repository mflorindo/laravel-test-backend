<?php

use App\UnidadeFederativa;
use Illuminate\Database\Seeder;

class UnidadesFederativasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $u = new UnidadeFederativa();
        $u->sigla = 'AC';
        $u->nome = 'Acre';
        $u->save();

        $u = new UnidadeFederativa();
        $u->sigla = 'AL';
        $u->nome = 'Alagoas';
        $u->save();

        $u = new UnidadeFederativa();
        $u->sigla = 'AP';
        $u->nome = 'Amapá';
        $u->save();

        $u = new UnidadeFederativa();
        $u->sigla = 'AM';
        $u->nome = 'Amazonas';
        $u->save();

        $u = new UnidadeFederativa();
        $u->sigla = 'BA';
        $u->nome = 'Bahia';
        $u->save();

        $u = new UnidadeFederativa();
        $u->sigla = 'CE';
        $u->nome = 'Ceará';
        $u->save();

        $u = new UnidadeFederativa();
        $u->sigla = 'ES';
        $u->nome = 'Espírito Santo';
        $u->save();

        $u = new UnidadeFederativa();
        $u->sigla = 'GO';
        $u->nome = 'Goiás';
        $u->save();

        $u = new UnidadeFederativa();
        $u->sigla = 'MA';
        $u->nome = 'Maranhão';
        $u->save();

        $u = new UnidadeFederativa();
        $u->sigla = 'MT';
        $u->nome = 'Mato Grosso';
        $u->save();

        $u = new UnidadeFederativa();
        $u->sigla = 'MS';
        $u->nome = 'Mato Grosso do Sul';
        $u->save();

        $u = new UnidadeFederativa();
        $u->sigla = 'MG';
        $u->nome = 'Minas Gerais';
        $u->save();

        $u = new UnidadeFederativa();
        $u->sigla = 'PA';
        $u->nome = 'Pará';
        $u->save();

        $u = new UnidadeFederativa();
        $u->sigla = 'PB';
        $u->nome = 'Paraíba';
        $u->save();

        $u = new UnidadeFederativa();
        $u->sigla = 'PR';
        $u->nome = 'Paraná';
        $u->save();

        $u = new UnidadeFederativa();
        $u->sigla = 'PE';
        $u->nome = 'Pernambuco';
        $u->save();

        $u = new UnidadeFederativa();
        $u->sigla = 'PI';
        $u->nome = 'Piauí';
        $u->save();

        $u = new UnidadeFederativa();
        $u->sigla = 'RJ';
        $u->nome = 'Rio de Janeiro';
        $u->save();

        $u = new UnidadeFederativa();
        $u->sigla = 'RN';
        $u->nome = 'Rio Grande do Norte';
        $u->save();

        $u = new UnidadeFederativa();
        $u->sigla = 'RS';
        $u->nome = 'Rio Grande do Sul';
        $u->save();

        $u = new UnidadeFederativa();
        $u->sigla = 'RO';
        $u->nome = 'Rondônia';
        $u->save();

        $u = new UnidadeFederativa();
        $u->sigla = 'RR';
        $u->nome = 'Roraima';
        $u->save();

        $u = new UnidadeFederativa();
        $u->sigla = 'SC';
        $u->nome = 'Santa Catarina';
        $u->save();

        $u = new UnidadeFederativa();
        $u->sigla = 'SP';
        $u->nome = 'São Paulo';
        $u->save();

        $u = new UnidadeFederativa();
        $u->sigla = 'SE';
        $u->nome = 'Sergipe';
        $u->save();

        $u = new UnidadeFederativa();
        $u->sigla = 'TO';
        $u->nome = 'Tocantins';
        $u->save();

        $u = new UnidadeFederativa();
        $u->sigla = 'DF';
        $u->nome = 'Distrito Federal';
        $u->save();

    }
}
