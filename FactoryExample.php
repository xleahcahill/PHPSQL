<?php
class BookStore
{
    private $bookTitle;
    private $bookPrice;

    public function __construct($bookTitle, $bookPrice)
    {
        $this->bookTitle = $bookTitle;
        $this->bookPrice= $bookPrice;
    }

    public function getTitleandPrice()
    {
        return $this->bookTitle . ' ' . $this->bookPrice;
    }
}

class BookStoreFactory
{
    public static function createbook($bookTitle, $bookPrice)
    {
        return new BookStore($bookTitle, $bookPrice);
    }
}

// have the factory create the Automobile object
$LeeChild = BookStoreFactory::createbook('Night School', '4.99');

print_r($LeeChild->getTitleandPrice()); // outputs "Night school', '4.99'

?>