<?php

abstract class Tema
{
    abstract public function headerAlani($arkaplanRengi, $headerLogo);
    abstract public function bodyAlani($icerik);
    abstract public function footerAlani($copyrightMetni);
}

class AboutPage extends Tema
{
    public function headerAlani($arkaplanRengi, $headerLogo)
    {
    }

    public function bodyAlani($icerik)
    {
    }
    public function footerAlani()
    {
        /* Hatanın Sebebi: Metodun imzasında belirtilen parametlerin somut sınıf içerisinde yazılan metotta da kullanıması gereklidir. */
    }

}
