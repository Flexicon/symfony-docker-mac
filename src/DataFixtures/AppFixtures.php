<?php

namespace App\DataFixtures;

use App\Entity\Todo;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    private $todoData = [
        ['title' => 'Grocery shopping', 'completed' => false],
        ['title' => 'Study', 'completed' => false],
        ['title' => 'Take out the trash', 'completed' => true],
        ['title' => 'Add todos to example app', 'completed' => true],
    ];

    public function load(ObjectManager $manager)
    {
        foreach ($this->todoData as $data) {
            $todo = new Todo();
            $todo->setTitle($data['title'])->setCompleted($data['completed']);
            $manager->persist($todo);
        }

        $manager->flush();
    }
}
