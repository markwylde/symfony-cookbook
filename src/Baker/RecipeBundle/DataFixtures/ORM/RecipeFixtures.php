<?php

namespace Blogger\BlogBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Baker\RecipeBundle\Entity\Recipe;

class RecipeFixtures implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $recipe1 = new Recipe();
        $recipe1->setTitle('A day with Symfony2 Part 1');
        $recipe1->setContent('Lorem ipsum dolor sit amet, consectetur adipiscing eletra electrify denim vel ports.\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi ut velocity magna. Etiam vehicula nunc non leo hendrerit commodo. Vestibulum vulputate mauris eget erat congue dapibus imperdiet justo scelerisque. Nulla consectetur tempus nisl vitae viverra. Cras el mauris eget erat congue dapibus imperdiet justo scelerisque. Nulla consectetur tempus nisl vitae viverra. Cras elementum molestie vestibulum. Morbi id quam nisl. Praesent hendrerit, orci sed elementum lobortis, justo mauris lacinia libero, non facilisis purus ipsum non mi. Aliquam sollicitudin, augue id vestibulum iaculis, sem lectus convallis nunc, vel scelerisque lorem tortor ac nunc.');
        $recipe1->setPhoto('example.jpg');
        $recipe1->setAuthor('mark');
        $recipe1->setTags('test, demo, example');
        $recipe1->setCreated(new \DateTime());
        $recipe1->setUpdated($recipe1->getCreated());
        $manager->persist($recipe1);

        $recipe2 = new Recipe();
        $recipe2->setTitle('A day with Symfony2 Part 2');
        $recipe2->setContent('Lorem ipsum dolor sit amet, consectetur adipiscing eletra electrify denim vel ports.\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi ut velocity magna. Etiam vehicula nunc non leo hendrerit commodo. Vestibulum vulputate mauris eget erat congue dapibus imperdiet justo scelerisque. Nulla consectetur tempus nisl vitae viverra. Cras el mauris eget erat congue dapibus imperdiet justo scelerisque. Nulla consectetur tempus nisl vitae viverra. Cras elementum molestie vestibulum. Morbi id quam nisl. Praesent hendrerit, orci sed elementum lobortis, justo mauris lacinia libero, non facilisis purus ipsum non mi. Aliquam sollicitudin, augue id vestibulum iaculis, sem lectus convallis nunc, vel scelerisque lorem tortor ac nunc.');
        $recipe2->setPhoto('example.jpg');
        $recipe2->setAuthor('mark');
        $recipe2->setTags('test, demo, example');
        $recipe2->setCreated(new \DateTime());
        $recipe2->setUpdated($recipe2->getCreated());
        $manager->persist($recipe2);

        $manager->flush();
    }

}