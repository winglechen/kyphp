<?php
namespace Ky\Core\Util;

/**
 * Trie字典树
 *
 */
class Trie
{
    private $trie; 
    private $utf8_table = array(
            1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1,
            1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1,
            1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1,
            1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1,
            1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1,
            1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1,
            1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1,
            1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1,
            1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1,
            1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1,
            1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1,
            1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1,
            2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2,
            2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2,
            3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3,
            4, 4, 4, 4, 4, 4, 4, 4, 5, 5, 5, 5, 6, 6, 1, 1
            );

    public function __construct()
    {
        $trie = array('children' => array(),'isword'=>false);
    }

    /**
     * 把词加入词典
     *
     * @param String $key
     */
    public function &setWord($word='')
    {
        $trienode = &$this->trie;
        for($i = 0;$i < strlen($word);)
        {
            $n = $this->getChar($word[$i]);          
            $character = substr($word,$i,$n);           
            $i += $n;

            if(!isset($trienode['children'][$character]))
            {
                $trienode['children'][$character] = array('isword'=>false);
            }
            if($i == strlen($word))
            {
                $trienode['children'][$character] = array('isword'=>true);
            }
            $trienode = &$trienode['children'][$character];
        }
    }


    public function getChar($char)
    {
        $char = ord($char);
        return $this->utf8_table[$char];
    }

    public function getWord($words='',$pos=0)
    {
        if(empty($word)) return '';

        $char = ord($words[$pos]); 
        $num  = $this->utf8_table[$char];

        return  substr($words,$pos,$num); 
    }

    /**
     *  不需要回溯版本分词
     */
    public function search($text="")
    {
        $textlen    = strlen($text);
        $trienode   = $tree = $this->trie;
        $results    = array();
        $finds      = array();
        $words      = array(); 
        for ($i = 0; $i < $textlen;){
            $n = $this->getChar($text[$i]);          
            $char = substr($text,$i,$n);
            $i += $n;

            //valid word
            for($j=0,$len=count($finds); $j<$len; $j++){
                if(isset($finds[$j]['children'][$char])){
                    $finds[$j] = &$finds[$j]['children'][$char];
                    $words[$j] .= $char;

                    if($finds[$j]['isword'] && !isset($results[$words[$j]])){
                        $results[$words[$j]] = 1;  
                    }
                }else{
                    array_splice($finds,$j,1); 
                    array_splice($words,$j,1); 
                    //unset($words[$j]);
                }
            }

            //add word
            if(isset($trienode['children'][$char])){

                $finds[] = &$trienode['children'][$char];
                $words[] = $char;

                if($trienode['children'][$char]['isword']){
                    $results[] = $char;
                }           
            }            

        }

        return array_keys($results);
    }
}

$trie = new Trie();



$trie->setWord('中国');
$trie->setWord('中国人');
$trie->setWord('伟大');
$trie->setWord('军队');
$trie->setWord('中国人民');
$trie->setWord('中国人民解放军');
$trie->setWord('解放军');
$trie->setWord('解放');
$words = $trie->search('伟大的中国人民解放军解放了,全中国是很伟大的军队');

echo '<hr />';
foreach ($words as $word)
{   
    echo ''.$word."<br />";
}

