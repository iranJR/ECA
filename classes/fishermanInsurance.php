<?php
/**
 * Created by PhpStorm.
 * User: aluno
 * Date: 23/08/2018
 * Time: 21:47
 */

class fishermanInsurance
{
    private $idtb_fisherman_insurance;
    private $str_month;
    private $str_year;
    private $db_value;
    private $tb_beneficiaries_id_beneficiaries;
    private $tb_city_id_city;

    /**
     * fishermanInsurance constructor.
     * @param $idtb_fisherman_insurance
     * @param $str_month
     * @param $str_year
     * @param $db_value
     * @param $tb_beneficiaries_id_beneficiaries
     * @param $tb_city_id_city
     */
    public function __construct($idtb_fisherman_insurance, $str_month, $str_year, $db_value, $tb_beneficiaries_id_beneficiaries, $tb_city_id_city)
    {
        $this->idtb_fisherman_insurance = $idtb_fisherman_insurance;
        $this->str_month = $str_month;
        $this->str_year = $str_year;
        $this->db_value = $db_value;
        $this->tb_beneficiaries_id_beneficiaries = $tb_beneficiaries_id_beneficiaries;
        $this->tb_city_id_city = $tb_city_id_city;
    }

    /**
     * @return mixed
     */
    public function getIdtbFishermanInsurance()
    {
        return $this->idtb_fisherman_insurance;
    }

    /**
     * @param mixed $idtb_fisherman_insurance
     */
    public function setIdtbFishermanInsurance($idtb_fisherman_insurance)
    {
        $this->idtb_fisherman_insurance = $idtb_fisherman_insurance;
    }

    /**
     * @return mixed
     */
    public function getStrMonth()
    {
        return $this->str_month;
    }

    /**
     * @param mixed $str_month
     */
    public function setStrMonth($str_month)
    {
        $this->str_month = $str_month;
    }

    /**
     * @return mixed
     */
    public function getStrYear()
    {
        return $this->str_year;
    }

    /**
     * @param mixed $str_year
     */
    public function setStrYear($str_year)
    {
        $this->str_year = $str_year;
    }

    /**
     * @return mixed
     */
    public function getDbValue()
    {
        return $this->db_value;
    }

    /**
     * @param mixed $db_value
     */
    public function setDbValue($db_value)
    {
        $this->db_value = $db_value;
    }

    /**
     * @return mixed
     */
    public function getTbBeneficiariesIdBeneficiaries()
    {
        return $this->tb_beneficiaries_id_beneficiaries;
    }

    /**
     * @param mixed $tb_beneficiaries_id_beneficiaries
     */
    public function setTbBeneficiariesIdBeneficiaries($tb_beneficiaries_id_beneficiaries)
    {
        $this->tb_beneficiaries_id_beneficiaries = $tb_beneficiaries_id_beneficiaries;
    }

    /**
     * @return mixed
     */
    public function getTbCityIdCity()
    {
        return $this->tb_city_id_city;
    }

    /**
     * @param mixed $tb_city_id_city
     */
    public function setTbCityIdCity($tb_city_id_city)
    {
        $this->tb_city_id_city = $tb_city_id_city;
    }



}