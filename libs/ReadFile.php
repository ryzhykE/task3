<?php

class ReadFile
{
    private $file;

    public function __construct()
    {
       $this->file = file(PATH);
    }

    public function readFileString($num)
    {
        foreach ($this->file as $key => $value)
        {
            if (is_int($num) && $key== $num)
            {
                return $value;
            }
        }
        return EROOR_NUMBER;
    }

    public function readFileSumbol($num, $numS)
    {
       foreach ($this->file as $key => $value)
       {
           if (is_int($num) && $key== $num)
           {
               if($value{$numS} !== ' ')
               {
                  return $value{$numS};

               }
               else
               {
                   return 'spase';
               }

           }
       }
        return EROOR_NUMBER;
    }

    public function replaceTextFile($line, $replace)
    {
        $open=fopen(PATH,"w");
        for($i=0;$i<count($this->file);$i++)
        {
            if(($i+1)!=$line)
            {
                fwrite($open,$this->file[$i]);
            }
            else
            {
                fwrite($open,$replace."\r\n");
            }
        }
        fclose($open);
    }

    public function replaceSumbolFile($line, $numS, $replace)
    {
        if(is_int($line) && is_int($numS))
        {
            return $this->file[$line][$numS] =$replace;
        }
        else
        {
            return EROOR_ENTER;
        }

    }

}

