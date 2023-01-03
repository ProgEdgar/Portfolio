<?php

use yii\db\Migration;

/**
 * Class m221230_000019_add_data
 */
class m221230_000019_add_data extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

        /**/
        // insert into language

        $this->insert('{{language}}', [
            'Name' => 'Unknown',
            'Code' => '??_??',
        ]);

        
        // insert into about

        $this->insert('{{about}}', [
            'Title' => 'About',
            'Description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a varius risus, vitae venenatis diam. Curabitur nec volutpat nisl, id euismod nibh. Fusce pharetra ultrices sapien, eu tempor neque vestibulum non. Vestibulum suscipit, lectus eget cursus ornare, nunc nunc rutrum erat, a pretium ante augue vitae risus. Vivamus vel metus eget massa convallis sagittis ut vel tortor. Pellentesque cursus eget ante vitae pharetra. Aliquam ac felis eros. In gravida sagittis elit eu elementum. Pellentesque a leo gravida, malesuada ante nec, luctus enim. Integer ac tincidunt velit, vel lobortis magna. Pellentesque porta, nibh id tempus ornare, diam odio volutpat libero, vitae bibendum ante risus a ipsum. Maecenas condimentum nibh leo, at commodo ligula blandit id.
            Quisque viverra auctor mollis. Nunc erat felis, porta sed efficitur in, aliquet et eros. Nunc ullamcorper velit eu mollis aliquet. Ut a ligula non dolor ullamcorper convallis. Proin ut sollicitudin risus. Morbi quis felis sit amet nulla luctus lacinia. Donec dapibus risus ut ligula eleifend blandit. Suspendisse luctus sodales ultrices. Sed eu maximus ipsum. Curabitur ut aliquet justo. Cras nec libero quis lorem lobortis ultrices ut eget nibh. Aliquam id felis ac nulla rutrum imperdiet. Cras sagittis posuere faucibus. Phasellus accumsan turpis facilisis mauris maximus, ut aliquam ligula placerat. Donec vel ullamcorper nibh. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.',
            'Image' => '/img/my-image2.jpg',
            'Language_Id' => 1,
        ]);

        
        // insert into contact

        $this->insert('{{contact}}', [
            'Title' => 'Contact',
            'Name' => 'My name',
            'ST_Email' => 'Email',
            'Email' => 'my.email@email.com',
            'ST_PhoneNumber' => 'Phone Number',
            'PhoneNumber' => 'xxxxxxxxx',
            'Language_Id' => 1,
        ]);

        
        // insert into curriculum

        $this->insert('{{curriculum}}', [
            'Title' => 'Curriculum',
            'ST_Name' => 'Name',
            'Name' => 'My name',
            'ST_PretendedJob' => 'Pretended Job',
            'PretendedJob' => 'Wanted Job',
            'ST_ProfExperience' => 'Professional Experience',
            'ST_Education' => 'Education',
            'ST_Languages' => 'Languages',
            'Language_Id' => 1,
        ]);

        
        // insert into dashboard

        $this->insert('{{dashboard}}', [
            'Title' => 'I am My name',
            'Job' => 'My job',
            'Contact' => 'Contact Me',
            'Image' => '/img/my-image1.jpg',
            'Language_Id' => 1,
        ]);

        
        // insert into follow

        $this->insert('{{follow_me}}', [
            'Title' => 'Follow Me',
            'Language_Id' => 1,
        ]);

        
        // insert into follow_me_image

        $this->insert('{{follow_me_image}}', [
            'Image' => '/img/facebook.png',
            'link' => '#',
            'FollowMe_Id' => 1,
        ]);

        $this->insert('{{follow_me_image}}', [
            'Image' => '/img/linkedin.png',
            'link' => '#',
            'FollowMe_Id' => 1,
        ]);

        $this->insert('{{follow_me_image}}', [
            'Image' => '/img/youtube.png',
            'link' => '#',
            'FollowMe_Id' => 1,
        ]);

        
        // insert into header

        $this->insert('{{header}}', [
            'Name' => 'My name',
            'Home' => 'Home',
            'About' => 'About',
            'Technologies' => 'Technologies',
            'Projects' => 'Projects',
            'Curriculum' => 'Curriculum',
            'Contact' => 'Contact',
            'Language_Id' => 1,
        ]);

        
        // insert into projects

        $this->insert('{{projects}}', [
            'Title' => 'Projects',
            'Language_Id' => 1,
        ]);

        
        // insert into technologies

        $this->insert('{{technologies}}', [
            'Title' => 'Technologies',
            'Language_Id' => 1,
        ]);

        
        // insert into curriculum_education

        $this->insert('{{curriculum_education}}', [
            'ST_Course' => 'Course',
            'Course' => 'My Course',
            'ST_University' => 'University',
            'University' => 'My University',
            'ST_AcquiredTech' => 'Acquired Technologies',
            'ST_Programming' => 'Programming',
            'ST_OperatingSystem' => 'Operating System',
            'ST_Frameworks' => 'Frameworks',
            'ST_Tools' => 'Tools',
            'ST_FinalGrade' => 'Final Grade',
            'FinalGrade' => 0,
            'Curriculum_Id' => 1,
        ]);

        
        // insert into curriculum_languages

        $this->insert('{{curriculum_languages}}', [
            'ST_MLanguage' => 'Mother Language',
            'MLanguage' => 'Mother Language',
            'ST_OralComp' => 'Oral Comprehension',
            'OralComp' => 'A0',
            'ST_Reading' => 'Reading',
            'Reading' => 'A0',
            'ST_OralInteraction' => 'Oral Interaction',
            'OralInteraction' => 'A0',
            'ST_OralProduction' => 'Oral Production',
            'OralProduction' => 'A0',
            'ST_Writing' => 'Writing',
            'Writing' => 'A0',
            'Curriculum_Id' => 1,
        ]);

        
        // insert into curriculum_job

        $this->insert('{{curriculum_job}}', [
            'ST_Job' => 'Job',
            'Job' => 'My job',
            'ST_Since' => 'Since',
            'Since' => date('Y-m-d', strtotime('01/01/2020')),
            'ST_Local' => 'Local',
            'Local' => 'Where i live',
            'ST_Company' => 'Company',
            'Company' => 'My company',
            'ST_Type' => 'Type of work done',
            'Work' => 'Work
            Plus Work
            Ando More Wore',
            'Curriculum_Id' => 1,
        ]);

        
        // insert into project

        $this->insert('{{project}}', [
            'Title' => 'My First Project',
            'ST_Presentation' => 'Presentation',
            'Presentation' => '',
            'ST_UsedTech' => 'Used Technologies',
            'ST_SourceCode' => 'SourceCode',
            'SourceCode' => '',
            'ST_Description' => 'Description',
            'Description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec venenatis varius odio, vitae pretium risus. Morbi varius, massa non sodales vehicula, arcu est fermentum urna, a gravida velit orci et ligula. In et hendrerit neque, ullamcorper ultricies neque. Aenean consequat faucibus pharetra. Etiam felis tortor, dapibus sed lobortis vitae, tristique at lorem. Sed et ligula sit amet massa euismod feugiat.
            Morbi tempor est ac diam mollis lacinia. Nam luctus rhoncus ipsum, vel laoreet velit pharetra et. Quisque blandit commodo diam imperdiet eleifend. Aenean faucibus dictum faucibus. Vestibulum pellentesque mauris metus, sit amet ultrices sapien fringilla vel. Vestibulum ut purus pharetra, placerat arcu ut, porta neque. Proin nec mi metus. In pulvinar, mauris iaculis euismod hendrerit, est dolor iaculis massa, et tempor lectus diam at diam. Donec non tortor eget urna dapibus dignissim a at massa. Phasellus a dapibus dolor, quis dictum turpis. Maecenas in elit eget urna congue commodo.
            Nullam ac aliquam arcu. Vivamus gravida imperdiet tempus. Proin sed nisi laoreet, consequat nibh in, blandit leo. Vestibulum ultricies at erat vitae euismod. Proin imperdiet dolor in venenatis pharetra. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. ',
            'Image' => '/img/project.png',
            'Projects_Id' => 1,
        ]);

        
        // insert into technology

        $this->insert('{{technology}}', [
            'Title' => 'Tech1',
            'Technologies_Id' => 1,
        ]);

        $this->insert('{{technology}}', [
            'Title' => 'Tech2',
            'Technologies_Id' => 1,
        ]);

        $this->insert('{{technology}}', [
            'Title' => 'Tech3',
            'Technologies_Id' => 1,
        ]);

        $this->insert('{{technology}}', [
            'Title' => 'Tech4',
            'Technologies_Id' => 1,
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

        
        // insert into foreign_languages

        $this->insert('{{foreign_languages}}', [
            'ST_FLanguage' => 'Foreign Language',
            'FLanguage' => 'Foreign Language',
            'ST_OralComp' => 'Oral Comprehension',
            'OralComp' => 'A0',
            'ST_Reading' => 'Reading',
            'Reading' => 'A0',
            'ST_OralInteraction' => 'Oral Interaction',
            'OralInteraction' => 'A0',
            'ST_OralProduction' => 'Oral Production',
            'OralProduction' => 'A0',
            'ST_Writing' => 'Writing',
            'Writing' => 'A0',
            'CurriculumLanguages_Id' => 1,
        ]);

        
        // insert into project_technologies

        $this->insert('{{project_technologies}}', [
            'Project_Id' => 1,
            'Technology_Id' => 1,
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

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m230103_163633_add_data cannot be reverted.\n";

        return false;
    }
    */
}
