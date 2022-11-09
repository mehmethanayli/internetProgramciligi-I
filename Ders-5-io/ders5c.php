<?php


abstract class Tema
{

    abstract public function headerAlanı($arkaplanRengi, $headerLogo);
    abstract public function bodyAlanı($sayfaIcerigi);
    abstract public function footerAlanı($copyrightMetni);
}

class AboutUsPage extends Tema
{
    public function headerAlanı($arkaplanRengi, $headerLogo)
    {
    }
    public function bodyAlanı($sayfaIcerigi)
    {
    }
    public function footerAlanı()
    {
        /* Hatanın Sebebi: Metodun imzasında belirtilen parametlerin somut sınıf içerisinde yazılan metotta da kullanıması gereklidir. */
    }
}
