<?php
namespace App\Tests\Entity;

use App\Entity\Comment;
use PHPUnit\Framework\TestCase;

class CommentTest extends TestCase
{
    public function testCommentCreate()
    {
        $comment = new Comment();
        $comment->setAuthor('Taro Morita');
        $comment->setText('Hello World!');
        $comment->setCreatedAtValue();
        $this->assertSame('Taro Morita', $comment->getAuthor());
        $this->assertSame('Hello World!', $comment->getText());

    }

}
