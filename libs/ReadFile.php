<?php

class ReadFile
{
    private $filetext;
    private $line;
    private $sumboll;
    private $content;

    public function getText()
    {
        return $this->filetext;
    }

    public function setText($filetext)
    {
        $this->filetext = $filetext;
    }

    public function getLine()
    {
        return $this->line;
    }
    public function setLine($line)
    {
         $this->line = $line;
    }

    /**
     * @param $fileName
     * @return array|string
     *
     */
    public function readFileString($fileName)
    {
        if (fopen($fileName, "r") !== false)
        {
            $handle = fopen($fileName, "r");
        }
        else
        {
            return  EROOR_OPEN;
        }
        while (($this->line = fgets($handle)) )
        {
            if($this->line !== null)
            {
                $this->filetext.= $this->line;
            } else
            {
                return  EROOR_READ;
            }
        }
        fclose($handle);
        $this->filetext = explode(PHP_EOL, $this->filetext);
        return $this->filetext;
    }

    /**
     * @param $fileName
     * @return string
     */
    public function readFileSumbol($fileName)
    {
        if (fopen($fileName, "r") !== false)
        {
            $handle = fopen($fileName, "r");
        }
        else
        {
            return  EROOR_OPEN;
        }
        while (false !== ($this->line = fgetc($handle))) {
            $this->sumboll  .= $this->line ."\n";
        }
        fclose($handle);
        return $this->sumboll;
    }
    
    /**
     * @param $text
     * @param $retext
     * @param $fileName
     * @return array|string
     */
    public function replaceTextFile ($text,$retext,$fileName)
    {
        if (fopen($fileName, "r") !== false)
        {
            $handle = fopen($fileName, "r");
            $this->content = file_get_contents($fileName);
            $this->content = str_replace($text, $retext, $this->content);
            $this->content =  file_put_contents( $fileName ,$this->content);
        }
        else
        {
            return  EROOR_OPEN;
        }
        fclose($handle);
        return $this->readFileString($fileName);
    }

    /**
     * @param $text
     * @param $retext
     * @param $fileName
     * @return string
     */
    public function replaceSumbolFile ($text,$retext,$fileName)
    {
        if (fopen($fileName, "r") !== false)
        {
            $handle = fopen($fileName, "r");
            $this->content = file_get_contents($fileName);
            $this->content = str_replace($text, $retext, $this->content);
            $this->content =  file_put_contents( $fileName ,$this->content);
        }
        else
        {
            return  EROOR_OPEN;
        }
        fclose($handle);
        return $this->readFileSumbol($fileName);
    }




}

