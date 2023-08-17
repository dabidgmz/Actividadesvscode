<?php

namespace App\Modelos;

use PDO;
use PDOException;

class Metodos
{
    private $conexion;

    public function __construct($conexion)
    {
        $this->conexion = $conexion;
    }

    public function agregarConsulta(
        $cefalesias, $fatigaOcular, $ojoRojo, $borrosidad, $ta, $fc, $satO2, $glicemiaCapilar,
        $dm, $hta, $agudezaVisualScorrecion, $lejosOD20, $lejosOI20, $lejosAO20, $cercaOD20,
        $cercaOI20, $cercaAO20, $od, $oi, $material, $avclAOD20, $avclAOI20, $avclAAO20, $avOD20,
        $avOI20, $avAO20, $avscOD20, $avscOI20, $avscAO20, $aveOD20, $aveOI20, $aveAO20,
        $avccOD20, $avccOI20, $avccAO20, $descripcion
    ) {
        $query = $this->conexion->prepare("INSERT INTO consultas 
            (CEFALEAS, FATIGA_OCULAR, OJO_ROJO, BORROSIDAD, TA, FC, SatO2, GLICEMIA_CAPILAR, DM,
            HTA, AGUDEZA_VISUAL_SCORRECION, LEJOS_O_D_20, LEJOS_O_I_20, LEJOS_A_O_20, CERCA_O_D_20,
            CERCA_O_I_20, CERCA_A_O_20, OD, OI, MATERIAL, AVCL_A_O_D_20, AVCL_A_OI_20, AVCL_A_AO_20,
            AV_O_D_20, AV_O_I_20, AV_A_O_20, AVSC_O_D_20, AVSC_O_I_20, AVSC_A_O_20, AVE_O_D_20,
            AVE_O_I_20, AVE_A_O_20, AVCC_O_D_20, AVCC_O_I_20, AVCC_A_O_20, descripcion)
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    
        $query->execute([
            $cefalesias,
            $fatigaOcular,
            $ojoRojo,
            $borrosidad,
            $ta,
            $fc,
            $satO2,
            $glicemiaCapilar,
            $dm,
            $hta,
            $agudezaVisualScorrecion,
            $lejosOD20,
            $lejosOI20,
            $lejosAO20,
            $cercaOD20,
            $cercaOI20,
            $cercaAO20,
            $od,
            $oi,
            $material,
            $avclAOD20,
            $avclAOI20,
            $avclAAO20,
            $avOD20,
            $avOI20,
            $avAO20,
            $avscOD20,
            $avscOI20,
            $avscAO20,
            $aveOD20,
            $aveOI20,
            $aveAO20,
            $avccOD20,
            $avccOI20,
            $avccAO20,
            $descripcion
        ]);
    }
}
