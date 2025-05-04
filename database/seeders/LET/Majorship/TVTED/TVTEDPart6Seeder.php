<?php

namespace Database\Seeders\LET\Majorship\TVTED;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class TVTEDPart6Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $now = Carbon::now();

       //Question Starts Here...
       $batch = [];

       // Part 6: Technology for Teaching & Learning

       //1
       $batch[] = [
           'subject_id'  => 17,
           'part'        => 6,
           'question'    => 'What is the primary purpose of a Learning Management System (LMS)?',
           'choices'     => json_encode([
               'To deliver and manage educational content',
               'To replace teachers entirely',
               'To create graphics and presentations',
               'To host social media discussions',
           ]),
           'answer'      => 'To deliver and manage educational content',
           'explanation' => 'LMS platforms centralize course materials, track progress, and facilitate communication between teachers and students.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];

       //2
       $batch[] = [
           'subject_id'  => 17,
           'part'        => 6,
           'question'    => 'What does the term "blended learning" refer to?',
           'choices'     => json_encode([
               'A mix of face-to-face and online instruction',
               'Learning exclusively via mobile apps',
               'Traditional lecture-based teaching only',
               'Self-paced study without any teacher interaction',
           ]),
           'answer'      => 'A mix of face-to-face and online instruction',
           'explanation' => 'Blended learning combines in-person classroom methods with computer-mediated activities.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];

       //3
       $batch[] = [
           'subject_id'  => 17,
           'part'        => 6,
           'question'    => 'Which technology is commonly used for real-time collaborative document editing in education?',
           'choices'     => json_encode([
               'Google Docs',
               'Microsoft PowerPoint',
               'Adobe Photoshop',
               'Final Cut Pro',
           ]),
           'answer'      => 'Google Docs',
           'explanation' => 'Google Docs allows multiple users to edit and comment on documents simultaneously in real time.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];

       //4
       $batch[] = [
           'subject_id'  => 17,
           'part'        => 6,
           'question'    => 'What is the flipped classroom model?',
           'choices'     => json_encode([
               'Delivering lectures at home and doing practice in class',
               'Replacing classroom teaching with video games',
               'Holding all classes online only',
               'Teaching without any digital tools',
           ]),
           'answer'      => 'Delivering lectures at home and doing practice in class',
           'explanation' => 'In a flipped classroom, students watch or read lectures at home and engage in interactive activities during class time.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];

       //5
       $batch[] = [
           'subject_id'  => 17,
           'part'        => 6,
           'question'    => 'Which of the following is an example of assistive technology in education?',
           'choices'     => json_encode([
               'Text-to-speech software',
               '3D printing',
               'Video streaming services',
               'Social networking platforms',
           ]),
           'answer'      => 'Text-to-speech software',
           'explanation' => 'Text-to-speech software helps students with reading difficulties by converting text into spoken words.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];

       //6
       $batch[] = [
           'subject_id'  => 17,
           'part'        => 6,
           'question'    => 'What is a key advantage of using cloud-based tools for teaching?',
           'choices'     => json_encode([
               'Accessibility from any device with internet',
               'Higher electricity consumption',
               'Mandatory offline installation',
               'Limited storage capacity',
           ]),
           'answer'      => 'Accessibility from any device with internet',
           'explanation' => 'Cloud-based tools enable access to educational resources from multiple locations without local installations.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];

       //7
       $batch[] = [
           'subject_id'  => 17,
           'part'        => 6,
           'question'    => 'Virtual Reality (VR) in education is best used for which purpose?',
           'choices'     => json_encode([
               'Immersive simulations and hands-on experiences',
               'Writing and formatting documents',
               'Scheduling classes',
               'Email communication only',
           ]),
           'answer'      => 'Immersive simulations and hands-on experiences',
           'explanation' => 'VR provides immersive environments where learners can practice real-world scenarios safely.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];

       //8
       $batch[] = [
           'subject_id'  => 17,
           'part'        => 6,
           'question'    => 'What does SCORM stand for in e-learning?',
           'choices'     => json_encode([
               'Sharable Content Object Reference Model',
               'Secure Content Object Reporting Method',
               'Standardized Course Online Resource Manual',
               'Synchronized Classroom Online Resource Module',
           ]),
           'answer'      => 'Sharable Content Object Reference Model',
           'explanation' => 'SCORM is a set of technical standards for creating interoperable e-learning content.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];

       //9
       $batch[] = [
           'subject_id'  => 17,
           'part'        => 6,
           'question'    => 'Which tool is specifically designed for creating interactive, zoomable presentations?',
           'choices'     => json_encode([
               'Prezi',
               'Microsoft Word',
               'Adobe Audition',
               'Slack',
           ]),
           'answer'      => 'Prezi',
           'explanation' => 'Prezi allows non-linear, zoomable presentations that engage learners visually.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];

       //10
       $batch[] = [
           'subject_id'  => 17,
           'part'        => 6,
           'question'    => 'A MOOC is best described as:',
           'choices'     => json_encode([
               'Massive Open Online Course',
               'Managed Offline Operating Center',
               'Modular Offline Online Content',
               'Multiple Optional Online Credits',
           ]),
           'answer'      => 'Massive Open Online Course',
           'explanation' => 'MOOCs offer free or affordable online courses to large numbers of learners.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];

       //11
       $batch[] = [
           'subject_id'  => 17,
           'part'        => 6,
           'question'    => 'Which protocol helps secure video conferencing sessions?',
           'choices'     => json_encode([
               'SSL/TLS',
               'FTP',
               'SMTP',
               'IMAP',
           ]),
           'answer'      => 'SSL/TLS',
           'explanation' => 'SSL/TLS encrypts data transmitted over the internet, including video calls.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];

       //12
       $batch[] = [
           'subject_id'  => 17,
           'part'        => 6,
           'question'    => 'Game-based learning primarily aims to:',
           'choices'     => json_encode([
               'Increase learner engagement through game mechanics',
               'Test hardware performance',
               'Replace textbooks completely',
               'Limit learner autonomy',
           ]),
           'answer'      => 'Increase learner engagement through game mechanics',
           'explanation' => 'Game-based learning uses elements like challenges and rewards to motivate learners.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];

       //13
       $batch[] = [
           'subject_id'  => 17,
           'part'        => 6,
           'question'    => 'Which platform feature is commonly used for hosting threaded online discussions?',
           'choices'     => json_encode([
               'Forum or discussion board',
               'Single-user document editor',
               'Video playback only',
               'Offline reading mode',
           ]),
           'answer'      => 'Forum or discussion board',
           'explanation' => 'Discussion boards in LMSs allow learners and instructors to post topics and reply in threads.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];

       //14
       $batch[] = [
           'subject_id'  => 17,
           'part'        => 6,
           'question'    => 'Digital literacy refers to:',
           'choices'     => json_encode([
               'Ability to use and evaluate digital tools effectively',
               'Typing speed on a keyboard',
               'Number of devices owned',
               'Physical wiring of networks',
           ]),
           'answer'      => 'Ability to use and evaluate digital tools effectively',
           'explanation' => 'Digital literacy encompasses skills to find, evaluate, create, and communicate information using digital technologies.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];

       //15
       $batch[] = [
           'subject_id'  => 17,
           'part'        => 6,
           'question'    => 'Which app is widely used for quick formative assessments with quizzes and polls?',
           'choices'     => json_encode([
               'Kahoot!',
               'Microsoft Excel',
               'Adobe Illustrator',
               'Spotify',
           ]),
           'answer'      => 'Kahoot!',
           'explanation' => 'Kahoot! enables teachers to create interactive quizzes that students answer in real time.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];

       //16
       $batch[] = [
           'subject_id'  => 17,
           'part'        => 6,
           'question'    => 'Adaptive learning systems use technology to:',
           'choices'     => json_encode([
               'Personalize content based on learner performance',
               'Standardize tests for all learners',
               'Block access after a time limit',
               'Convert text to audio only',
           ]),
           'answer'      => 'Personalize content based on learner performance',
           'explanation' => 'Adaptive learning systems adjust difficulty and content delivery to match individual learner needs.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];

       //17
       $batch[] = [
           'subject_id'  => 17,
           'part'        => 6,
           'question'    => 'An e-portfolio in education is used to:',
           'choices'     => json_encode([
               'Showcase student work and growth over time',
               'Store only teacher feedback',
               'Archive deleted courses',
               'Provide music streaming',
           ]),
           'answer'      => 'Showcase student work and growth over time',
           'explanation' => 'E-portfolios allow students to collect and reflect on their academic artifacts across subjects.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];

       //18
       $batch[] = [
           'subject_id'  => 17,
           'part'        => 6,
           'question'    => 'Which is an example of synchronous online learning?',
           'choices'     => json_encode([
               'Live webinars',
               'Pre-recorded lectures',
               'Self-paced modules',
               'Discussion forums',
           ]),
           'answer'      => 'Live webinars',
           'explanation' => 'Synchronous learning occurs in real time, such as live video conferences and webinars.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];

       //19
       $batch[] = [
           'subject_id'  => 17,
           'part'        => 6,
           'question'    => 'What is H5P primarily used for in e-learning?',
           'choices'     => json_encode([
               'Creating interactive HTML5 content like quizzes and presentations',
               'Managing student enrollments',
               'Streaming video lectures only',
               'Conducting peer grading',
           ]),
           'answer'      => 'Creating interactive HTML5 content like quizzes and presentations',
           'explanation' => 'H5P is a free tool that enables educators to create engaging, interactive web content in HTML5.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];

       //20
       $batch[] = [
           'subject_id'  => 17,
           'part'        => 6,
           'question'    => 'Open Educational Resources (OER) are best described as:',
           'choices'     => json_encode([
               'Freely accessible and openly licensed educational materials',
               'Paid proprietary textbooks',
               'Teacher-only internal documents',
               'Student-submitted assignments',
           ]),
           'answer'      => 'Freely accessible and openly licensed educational materials',
           'explanation' => 'OER includes textbooks, curricula, lecture notes, and other educational resources that are openly licensed for free use.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
 

        // Retrieve existing questions to detect duplicates
        $existing = DB::table('questions')
            ->pluck('question')
            ->map(fn($q) => trim($q))
            ->all();

        // Check for duplicates against DB
        $dupes = [];
        foreach ($batch as $item) {
            if (in_array(trim($item['question']), $existing, true)) {
                $dupes[] = $item;
            }
        }

        $batchCount = count($batch);

        // 1) Inform about duplicates
        if (!empty($dupes)) {
            $this->command->warn("Detected " . count($dupes) . " duplicate question(s):");
            foreach ($dupes as $d) {
                $this->command->warn("  - {$d['question']}");
            }
        }

        // 2) Inform if question count is less than required
        if ($batchCount < 20) {
            $this->command->warn("Part 6 has only {$batchCount} questions. Minimum 20 required.");
        }

        // 3) Abort seeding if duplicates found or insufficient items
        if (!empty($dupes) || $batchCount < 20) {
            $this->command->info("Seeding aborted for part 6. Please resolve duplicates or add more questions.");
            return;
        }

        // 4) Insert all questions if checks pass
        DB::table('questions')->insert($batch);
        $this->command->info("{$batchCount} question(s) seeded for part 6.");
    }
}
