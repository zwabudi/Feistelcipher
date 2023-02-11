<?php

class GenererCle
{
    private $CLE =  array();          
    private $CLE1 = array();
    private $CLE2 = array();
    private $CLE1_p = array();
    private $CLE2_p  = array(); 
    private $CLE_PERMUTE =  array();            
    private $FONCTION_PERMUTATION   =   array();          
    private $VALEURS_FONCTION_PERMUTATION = array();      
    private $VALEUR_PI = 0;

    public function __constructor($cle, $fonction)
    {
        $this.$FONCTION_PERMUTATION  = $cle;
        $this.$CLE = $fonction;
    }

    public function diviserBloc()
    {
        $this.$CLE1_p = array_slice($this.$VALEURS_FONCTION_PERMUTATION, 0, 3);
        $this.$CLE2_p = array_slice($this.$VALEURS_FONCTION_PERMUTATION, 3, 7);
        
        echo "Les deux blocs de la clé sont :".$this.$CLE1_p." / ".$this.$CLE2_p;
    }

    public function operateur_binaire()
    {   
        $j = 0;
        $k = 0;

        while ($j < count($this.$CLE1_p))
        {
            while ($j < count($this.$CLE2_p))
            {
                $val = $this.$CLE1_p[$j] xor $this.$CLE2_p[$j];
                
                $this.$CLE1[$val];
                $j = $j + 1;
                $j = $j + 1;
                echo $this.$CLE1;
            }
        }
    }

    public function operateur_binaire_2()
    {
        $i = 0;
        $j = 0;

        while($i < count($this.$CLE2_p))
        {
            while (j < count($this.$CLE1_p))
             {
                array_push($this.$CLE2, $this.$CLE2_p[j] && $this.$CLE1_p[$j]);
                    $j = $j + 1;
            }
            $i = $i + 1;
        }
        echo $this.$CLE2;
    }

    public function decaler_gauche()
    {
        $valeur_cles = array_slice($this.$CLE1, 0, 2);
        $dernieres_valeurs = array_slice($this.$CLE1, 2, 4);

        $this.$CLE1 = $dernieres_valeurs + $valeur_cles;
        echo $this.$CLE1;


    }

    public function faire_permutation()
    {

        $this.$CLE_PERMUTE = $this.permuter_cles();
    
        foreach($this.$FONCTION_PERMUTATION as $FN_PERMUTATION)
        {
            foreach(array_keys($this.$CLE_PERMUTE) as $CLE){
                if($FN_PERMUTATION == $CLE)
                {
                    array_push($this.$VALEURS_FONCTION_PERMUTATION, $this.$CLE_PERMUTE[$CLE]);
                }
            }
            echo "La permutation vaut : ".$this.$VALEURS_FONCTION_PERMUTATION;
        }    
    }

    public function permuter_cles()
    {
        $cle_permute = array(); 
        $cle_permute = array( 
                                0 => 0, 
                                1 => 0, 
                                2 => 0, 
                                3 => 0, 
                                4 => 0, 
                                5 => 0, 
                                6 => 0, 
                                7 => 0  
        );

        $i = 0;

        while (i < count($this.$CLE))
        {
            $cle_permute[i] = $this.$CLE[i];
            $i = $i + 1;        
        }

        return $cle_permute;    
    }

}

?>