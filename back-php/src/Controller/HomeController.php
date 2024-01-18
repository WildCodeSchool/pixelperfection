<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(): Response
    {
        return $this->render('home/index.html.twig');
    }

    #[Route('/about', name: 'app_home_about')]
    public function about(): Response
    {
        $teamMembers = [
            [
                'first_name' => 'Johann',
                'last_name' => 'Liardet',
                'id' => 1,
                'linkedin' => 'https://www.linkedin.com/in/johann-liardet-233214256/',
                'bio' => 'Johann Liardet is a seasoned PHP developer with a wealth of experience in crafting
                innovative web solutions. His journey into the world of web development began during his
                college years, where he discovered his passion for coding and problem-solving. Johann has
                since honed his skills in various frameworks and technologies, becoming a go-to expert in
                our team. Throughout his career, Johann has successfully led numerous projects,
                demonstrating not only technical proficiency but also effective team collaboration. His
                commitment to writing clean, maintainable code has been instrumental in the success of our
                PHP development initiatives. Beyond his technical prowess, Johann is known for his
                excellent communication skills and client-focused approach. In his free time, Johann
                enjoys contributing to open-source projects and staying updated with the latest trends in
                web development. His dedication to continuous learning and improvement makes him an
                invaluable asset to our team.'
            ],
            [
                'first_name' => 'Julie',
                'last_name' => 'Raymond',
                'id' => 2,
                'linkedin' => 'https://www.linkedin.com/in/julie-raymond-dev/',
                'bio' => 'Julie Raymond is a passionate PHP developer known for her creative approach to
                problem-solving and dedication to delivering high-quality web solutions. With a background
                in computer science, Julie entered the field of web development driven by a desire to blend
                technology and creativity. Julie\'s expertise lies in building robust and scalable web
                applications. She has a keen eye for detail and a knack for turning complex ideas into
                elegant and efficient code. Her commitment to staying abreast of the latest industry trends
                ensures that our projects benefit from cutting-edge technologies. Outside of coding, Julie
                enjoys contributing to the developer community through blog posts and workshops. Her
                ability to mentor and inspire others makes her an essential part of our collaborative team.'
            ],
            [
                'first_name' => 'Sami',
                'last_name' => 'Ahamadi',
                'id' => 3,
                'linkedin' => 'https://www.linkedin.com/in/sami-ahamadi-084401261/',
                'bio' => 'Sami Ahamadi is a skilled PHP developer recognized for his analytical mindset and
                commitment to delivering efficient and reliable software solutions. Sami\'s journey into the
                world of programming started during his academic years, where he developed a passion for
                solving complex problems through code. Sami specializes in backend development, focusing on
                building robust server-side applications. His attention to detail and methodical approach
                contribute to the stability and performance of our projects. Sami is also an advocate for
                clean code practices, ensuring the maintainability and scalability of our applications.
                Beyond coding, Sami enjoys exploring new technologies and sharing his knowledge through
                tech meetups and conferences. His dedication to excellence and continuous learning enhances
                the capabilities of our development team.'
            ],
            [
                'first_name' => 'Marion',
                'last_name' => 'Pagot',
                'id' => 4,
                'linkedin' => 'https://www.linkedin.com/in/marion-pagot-894b6a94/',
                'bio' => 'Marion Pagot is a dynamic PHP developer known for her versatility and ability to
                adapt to diverse project requirements. Marion\'s interest in web development sparked during
                her university studies, where she discovered the power of coding to create meaningful
                digital experiences. Marion excels in frontend and backend development, seamlessly blending
                creativity with technical expertise. Her proficiency in multiple programming languages and
                frameworks allows her to contribute to various aspects of our projects. Marion\'s
                collaborative spirit and effective communication skills make her an integral part of our
                development team. Outside of work, Marion enjoys engaging in community projects and
                contributing to initiatives that promote diversity in technology. Her passion for
                innovation and continuous learning adds a vibrant dimension to our team.'
            ],
        ];


        return $this->render('home/about.html.twig', ['teamMembers' => $teamMembers]);
    }
}
