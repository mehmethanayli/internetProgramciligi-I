<?php
interface CRUD
{
    public function Olustur($deger);
    public function Guncelle($deger);
    public function Getir($deger);
    public function Sil($deger);
}

interface Database
{
    public function ConnectDB($dbName);
}

abstract class Sablon
{
    abstract public function sayfaYapisi($icerik);
}

/* Bir sınıf bir abstract clası extend edebilir, birden fazla interface'yi implemente edebilir. */
class Test extends Sablon implements CRUD, Database
{
    /* Abstract Class */
    public function sayfaYapisi($icerik)
    {
    }
    /* Abstract Class */


    /* 1. Interface */
    public function Olustur($deger)
    {
    }
    public function Getir($deger)
    {
    }
    public function Guncelle($deger)
    {
    }
    public function Sil($deger)
    {
    }
    /* 1. Interface */


    /* 2. Interface */
    public function ConnectDB($dbName)
    {
    }
    /* 2. Interface */

}
