<?php
namespace app\models;

use yii\base\Model;

class ReporteFormocu extends Model
{
		public $IdQuery;
		public $C_P_U;
		public $query;
		public $transcurso_de_tiempo;
		public $memoria;
		public $Fecha_Ocurrencia;
	public function rules()
	{
		return[
			['IdQuery','string']
		];
	}
}
?>