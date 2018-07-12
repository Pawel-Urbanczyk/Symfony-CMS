<?php

namespace Ssk\CmsBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Ssk\CmsBundle\Entity\Article;

class ArticleFixtures implements FixtureInterface{

    public function load(ObjectManager $manager){

        $article1 = new Article();
        $article1->setTitle('Artykul 2');
        $article1->setContent('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam posuere eros quis enim tempor semper. Vestibulum tellus massa, commodo eu rhoncus at, luctus ac metus. Aliquam at elementum augue, sit amet commodo nulla. Suspendisse ac nunc posuere, molestie metus non, sagittis dui. Nunc luctus metus ac nisl semper pretium vel ac massa. Suspendisse ipsum mauris, facilisis semper fermentum quis, dictum non ipsum. Nulla sed purus lectus. Mauris a viverra elit. Sed est nisi, rhoncus at massa nec, lobortis convallis justo. Pellentesque laoreet leo non viverra fringilla.');
        $article1->setCreated(date('Y-m-d H:i:s'));

        $manager->persist($article1);


        $article2 = new Article();
        $article2->setTitle('Artykul 2');
        $article2->setContent('Morbi non sem eu nulla ullamcorper placerat. Vestibulum aliquam pellentesque ipsum, in gravida felis. Praesent ac dolor augue. Maecenas ullamcorper ultricies dui, ut laoreet ligula molestie ac. Nullam sed convallis felis, sit amet pharetra tortor. Etiam ultricies sed augue quis blandit. Suspendisse leo leo, lobortis in quam nec, viverra fringilla ante. Curabitur ornare lorem quis feugiat ornare. Nam ultricies tortor in vulputate consequat. Vestibulum bibendum tempus risus, vitae commodo justo tempus vitae. Donec auctor a neque ac fermentum.');
        $article2->setCreated(date('Y-m-d H:i:s'));

        $manager->persist($article2);


        $article3 = new Article();
        $article3->setTitle('Artykul 3');
        $article3->setContent('Mauris tempus tortor in nulla volutpat, nec viverra urna auctor. Integer ultrices orci nec finibus pharetra. Cras leo neque, tempus quis felis in, mollis euismod turpis. Aenean ut nisi malesuada neque ornare porttitor et vitae neque. In hac habitasse platea dictumst. Donec ac nisi sagittis, viverra quam sed, auctor ligula. Fusce pretium, nibh non ornare pretium, velit risus lacinia est, ut porta orci ante vel leo. Vivamus fermentum dui eu euismod ornare. Aenean interdum justo at turpis aliquam, quis finibus libero porta. Nam malesuada ultricies feugiat. In hac habitasse platea dictumst. Vestibulum facilisis neque nec diam ultrices, non accumsan neque dignissim. Mauris consectetur urna quis erat mattis hendrerit. Donec ut arcu pellentesque, pulvinar nisl id, varius nulla. Etiam fermentum elit tortor.');
        $article3->setCreated(date('Y-m-d H:i:s'));

        $manager->persist($article3);

        $manager->flush();
    }

}


?>