<?php

use yii\db\Migration;

/**
 * Class m221230_000019_add_unknown_data
 */
class m221230_000019_add_unknown_data extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

        /************************************************************************************** THE UNKNOWN DATA **************************************************************/
        // insert into portfolio

        $this->insert('{{portfolio}}', [
            'Language' => 'Unknown Language',
            'LanguageCode' => '??_??',
            'DashContact' => 'Contact Me',
            'DashTitle' => 'Unknown Name',
            'DashJob' => 'Unknown Job',
            'DashImage' => '/img/unknown-image.jpg',
            'HeaderStart' => 'Start',
            'HeaderName' => 'Unknown Name',
            'STAbout' => 'About',
            'STTechnologies' => 'Technologies',
            'STProjects' => 'Projects',
            'STCurriculum' => 'Curriculum',
            'STContact' => 'Contact',
            'STFollowMe' => 'Follow Me',
            'AboutDescription' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                Donec a varius risus, vitae venenatis diam. Curabitur nec volutpat nisl, id euismod nibh. 
                Fusce pharetra ultrices sapien, eu tempor neque vestibulum non. Vestibulum suscipit, lectus 
                eget cursus ornare, nunc nunc rutrum erat, a pretium ante augue vitae risus. Vivamus vel 
                metus eget massa convallis sagittis ut vel tortor. Pellentesque cursus eget ante vitae pharetra. 
                Aliquam ac felis eros. In gravida sagittis elit eu elementum. Pellentesque a leo gravida, 
                malesuada ante nec, luctus enim. Integer ac tincidunt velit, vel lobortis magna. Pellentesque 
                porta, nibh id tempus ornare, diam odio volutpat libero, vitae bibendum ante risus a ipsum. 
                Maecenas condimentum nibh leo, at commodo ligula blandit id. \n
                Quisque viverra auctor mollis. Nunc erat felis, porta sed efficitur in, aliquet et eros. 
                Nunc ullamcorper velit eu mollis aliquet. Ut a ligula non dolor ullamcorper convallis. 
                Proin ut sollicitudin risus. Morbi quis felis sit amet nulla luctus lacinia. Donec dapibus 
                risus ut ligula eleifend blandit. Suspendisse luctus sodales ultrices. Sed eu maximus ipsum. 
                Curabitur ut aliquet justo. Cras nec libero quis lorem lobortis ultrices ut eget nibh. Aliquam 
                id felis ac nulla rutrum imperdiet. Cras sagittis posuere faucibus. Phasellus accumsan turpis 
                facilisis mauris maximus, ut aliquam ligula placerat. Donec vel ullamcorper nibh. Orci varius 
                natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.',
            'AboutImage' =>  '/img/unknown-image.jpg',
            'ProjectSTPresentation' =>  'Presentation',
            'ProjectSTUsedTech' =>  'Used Technologies',
            'ProjectSTSourceCode' =>  'SourceCode',
            'ProjectSTDescription' =>  'Description',
            'CurriculumSTName' =>  'Name',
            'CurriculumSTLanguages' =>  'Languages',
            'CurriculumSTEducation' =>  'Education',
            'CurriculumSTProfExperience' =>  'Professional Experience',
            'CurriculumPretendedJob' =>  'Unknown Pretended Job',
            'CurriculumSTPretendedJob' =>  'Pretended Job',
            'CurriculumSTLanguage' =>  'Language',
            'CurriculumSTOralComp' =>  'Oral Comprehension',
            'CurriculumSTReading' =>  'Reading',
            'CurriculumSTOralInteraction' =>  'Oral Interaction',
            'CurriculumSTOralProduction' =>  'Oral Production',
            'CurriculumSTWriting' =>  'Writing',
            'CurriculumSTJob' =>  'Job',
            'CurriculumSTType' =>  'Type of work done',
            'CurriculumSTCompany' =>  'Company',
            'CurriculumSTLocal' =>  'Local',
            'CurriculumSTSince' =>  'Since',
            'CurriculumSTCourse' =>  'Course',
            'CurriculumSTUniversity' =>  'University',
            'CurriculumSTAcquiredTech' =>  'Acquired Technologies',
            'CurriculumSTProgramming' =>  'Programming',
            'CurriculumSTOperatingSystem' =>  'Operating System',
            'CurriculumSTFrameworks' =>  'Frameworks',
            'CurriculumSTTools' =>  'Tools',
            'CurriculumSTFinalGrade' =>  'Final Grade',
            'CurriculumName' =>  'Unknown Curriculum Name',
            'ContactName' =>  'Unknown Name',
            'ContactSTEmail' =>  'Email',
            'ContactPhoneNumber' =>  '000000000',
            'ContactSTPhoneNumber' =>  'Phone Number',
            'ContactEmail' =>  'my.unknown.email@unknown.com',
        ]);

        
        // insert into curriculum_job

        $this->insert('{{curriculum_job}}', [
            'Job' => 'My unknown job',
            'Since' => date('Y-m-d', strtotime('01/01/2020')),
            'Local' => 'I live in the unknown',
            'Company' => 'My unknown company',
            'Work' => 'Work \n Plus Work \n Ando More Wore',
            'Portfolio_Id' => 1,
        ]);

        
        // insert into curriculum_education

        $this->insert('{{curriculum_education}}', [
            'Course' => 'The Unknown Course',
            'University' => 'The Unknown University',
            'FinalGrade' => 999,
            'Portfolio_Id' => 1,
        ]);

        
        // insert into curriculum_languages

        $this->insert('{{curriculum_languages}}', [
            'Name' => 'Unknown Language',
            'OralComp' => 'A0',
            'Reading' => 'A0',
            'OralInteraction' => 'A0',
            'OralProduction' => 'A0',
            'Writing' => 'A0',
            'Portfolio_Id' => 1,
        ]);

        
        // insert into project

        $this->insert('{{project}}', [
            'Title' => 'My First Project',
            'Presentation' => '',
            'SourceCode' => '',
            'Description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                Donec venenatis varius odio, vitae pretium risus. Morbi varius, massa non sodales 
                vehicula, arcu est fermentum urna, a gravida velit orci et ligula. In et hendrerit 
                neque, ullamcorper ultricies neque. Aenean consequat faucibus pharetra. Etiam 
                felis tortor, dapibus sed lobortis vitae, tristique at lorem. Sed et ligula sit 
                amet massa euismod feugiat.\n 
                Morbi tempor est ac diam mollis lacinia. Nam luctus rhoncus ipsum, vel laoreet 
                velit pharetra et. Quisque blandit commodo diam imperdiet eleifend. Aenean 
                faucibus dictum faucibus. Vestibulum pellentesque mauris metus, sit amet 
                ultrices sapien fringilla vel. Vestibulum ut purus pharetra, placerat arcu ut, 
                porta neque. Proin nec mi metus. In pulvinar, mauris iaculis euismod hendrerit, 
                est dolor iaculis massa, et tempor lectus diam at diam. Donec non tortor eget 
                urna dapibus dignissim a at massa. Phasellus a dapibus dolor, quis dictum turpis. 
                Maecenas in elit eget urna congue commodo. \n 
                Nullam ac aliquam arcu. Vivamus gravida imperdiet tempus. Proin sed nisi laoreet, 
                consequat nibh in, blandit leo. Vestibulum ultricies at erat vitae euismod. Proin 
                imperdiet dolor in venenatis pharetra. Class aptent taciti sociosqu ad litora 
                torquent per conubia nostra, per inceptos himenaeos. ',
            'Image' => '/img/unknown-project.jpg',
            'Portfolio_Id' => 1,
        ]);

        
        // insert into follow_me_image

        $this->insert('{{follow_me_image}}', [
            'Image' => '/img/facebook.png',
            'link' => '#facebook',
            'Portfolio_Id' => 1,
        ]);

        $this->insert('{{follow_me_image}}', [
            'Image' => '/img/linkedin.png',
            'link' => '#linkedin',
            'Portfolio_Id' => 1,
        ]);

        $this->insert('{{follow_me_image}}', [
            'Image' => '/img/youtube.png',
            'link' => '#youtube',
            'Portfolio_Id' => 1,
        ]);

        // insert into technology

        $this->insert('{{technology}}', [
            'Name' => '??1??',
            'Portfolio_Id' => 1,
        ]);

        $this->insert('{{technology}}', [
            'Name' => '??2??',
            'Portfolio_Id' => 1,
        ]);

        $this->insert('{{technology}}', [
            'Name' => '??3??',
            'Portfolio_Id' => 1,
        ]);

        $this->insert('{{technology}}', [
            'Name' => '??4??',
            'Portfolio_Id' => 1,
        ]);

        
        // insert into education_technologies

        $this->insert('{{education_technologies}}', [
            'CurriculumEducation_Id' => 1,
            'Technology_Id' => 1,
            'Type' => '1',
        ]);

        $this->insert('{{education_technologies}}', [
            'CurriculumEducation_Id' => 1,
            'Technology_Id' => 2,
            'Type' => '2',
        ]);

        $this->insert('{{education_technologies}}', [
            'CurriculumEducation_Id' => 1,
            'Technology_Id' => 3,
            'Type' => '3',
        ]);

        $this->insert('{{education_technologies}}', [
            'CurriculumEducation_Id' => 1,
            'Technology_Id' => 4,
            'Type' => '4',
        ]);

        // insert into project_technologies

        $this->insert('{{project_technologies}}', [
            'Project_Id' => 1,
            'Technology_Id' => 3,
        ]);

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m230103_163633_add_data cannot be reverted.\n";

        return false;
    }
}
