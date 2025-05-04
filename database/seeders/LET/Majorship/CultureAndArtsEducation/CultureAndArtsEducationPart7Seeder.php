<?php

namespace Database\Seeders\LET\Majorship\CultureAndArtsEducation;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class CultureAndArtsEducationPart7Seeder extends Seeder
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

       // Part 7: Arts Integration & Technology (STEAM, digital media, virtual galleries)

       //1
       $batch[] = [
           'subject_id' => 19,
           'part'       => 7,
           'question'   => 'What does STEAM stand for in arts integration?',
           'choices'    => json_encode([
               'Science, Technology, Engineering, Arts, Mathematics',
               'Social Studies, Technology, English, Arts, Music',
               'Science, Teaching, Education, Arts, Mathematics',
               'Science, Technology, Engineering, Athletics, Music',
           ]),
           'answer'     => 'Science, Technology, Engineering, Arts, Mathematics',
           'explanation'=> 'STEAM adds the Arts to traditional STEM education for holistic learning.',
           'created_at' => $now,
           'updated_at' => $now,
       ];

       //2
       $batch[] = [
           'subject_id' => 19,
           'part'       => 7,
           'question'   => 'Which digital tool is commonly used for multimedia storytelling in the classroom?',
           'choices'    => json_encode([
               'Multimedia authoring software',
               'Slide rule',
               'Analog projector',
               'Typewriter',
           ]),
           'answer'     => 'Multimedia authoring software',
           'explanation'=> 'Software like Adobe Spark or PowerPoint supports text, images, audio, and video integration.',
           'created_at' => $now,
           'updated_at' => $now,
       ];

       //3
       $batch[] = [
           'subject_id' => 19,
           'part'       => 7,
           'question'   => 'What is a virtual gallery?',
           'choices'    => json_encode([
               'An online platform showcasing digital or scanned artworks',
               'A physical museum annex',
               'A radio broadcast of art descriptions',
               'A printed exhibition catalog',
           ]),
           'answer'     => 'An online platform showcasing digital or scanned artworks',
           'explanation'=> 'Virtual galleries provide remote access to exhibitions via web or VR.',
           'created_at' => $now,
           'updated_at' => $now,
       ];

       //4
       $batch[] = [
           'subject_id' => 19,
           'part'       => 7,
           'question'   => 'Which file format is vector-based and resolution-independent?',
           'choices'    => json_encode([
               'SVG',
               'JPEG',
               'PNG',
               'BMP',
           ]),
           'answer'     => 'SVG',
           'explanation'=> 'Scalable Vector Graphics (SVG) store mathematical shapes allowing infinite scaling.',
           'created_at' => $now,
           'updated_at' => $now,
       ];

       //5
       $batch[] = [
           'subject_id' => 19,
           'part'       => 7,
           'question'   => 'What distinguishes raster images from vector images?',
           'choices'    => json_encode([
               'Raster images are pixel-based and can lose quality when scaled',
               'Raster images are infinitely scalable',
               'Raster images use mathematical formulas',
               'Raster images have no resolution',
           ]),
           'answer'     => 'Raster images are pixel-based and can lose quality when scaled',
           'explanation'=> 'Raster formats like JPEG or PNG consist of pixels and not mathematical paths.',
           'created_at' => $now,
           'updated_at' => $now,
       ];

       //6
       $batch[] = [
           'subject_id' => 19,
           'part'       => 7,
           'question'   => 'Which technology maps projected images onto 3D objects for immersive displays?',
           'choices'    => json_encode([
               'Projection mapping',
               'Offset printing',
               'Screen printing',
               'Letterpress',
           ]),
           'answer'     => 'Projection mapping',
           'explanation'=> 'Projection mapping aligns visuals onto surfaces for dynamic experiences.',
           'created_at' => $now,
           'updated_at' => $now,
       ];

       //7
       $batch[] = [
           'subject_id' => 19,
           'part'       => 7,
           'question'   => 'What is a digital portfolio used for in arts education?',
           'choices'    => json_encode([
               'Curating and sharing student artworks online',
               'Logging attendance',
               'Storing textbooks',
               'Printing certificates',
           ]),
           'answer'     => 'Curating and sharing student artworks online',
           'explanation'=> 'Digital portfolios document progress and facilitate feedback and sharing.',
           'created_at' => $now,
           'updated_at' => $now,
       ];

       //8
       $batch[] = [
           'subject_id' => 19,
           'part'       => 7,
           'question'   => 'Which software is typically used for editing digital audio compositions?',
           'choices'    => json_encode([
               'Digital Audio Workstation (DAW)',
               'Word processor',
               'Spreadsheet',
               'Presentation software',
           ]),
           'answer'     => 'Digital Audio Workstation (DAW)',
           'explanation'=> 'DAWs like Audacity or Pro Tools allow multi-track recording and editing.',
           'created_at' => $now,
           'updated_at' => $now,
       ];

       //9
       $batch[] = [
           'subject_id' => 19,
           'part'       => 7,
           'question'   => 'In STEAM projects, why is interdisciplinary collaboration important?',
           'choices'    => json_encode([
               'It combines diverse expertise to solve complex problems',
               'It limits creativity to one discipline',
               'It reduces project scope',
               'It isolates arts from science',
           ]),
           'answer'     => 'It combines diverse expertise to solve complex problems',
           'explanation'=> 'Collaboration leverages skills from multiple domains for richer solutions.',
           'created_at' => $now,
           'updated_at' => $now,
       ];

       //10
       $batch[] = [
           'subject_id' => 19,
           'part'       => 7,
           'question'   => 'Which tool supports asynchronous feedback on digital student artworks?',
           'choices'    => json_encode([
               'Learning management system (LMS)',
               'Overhead projector',
               'Physical bulletin board',
               'Typewriter',
           ]),
           'answer'     => 'Learning management system (LMS)',
           'explanation'=> 'LMS platforms host student uploads, comments, and peer review digitally.',
           'created_at' => $now,
           'updated_at' => $now,
       ];

       //11
       $batch[] = [
           'subject_id' => 19,
           'part'       => 7,
           'question'   => 'What is augmented reality (AR) in museum contexts?',
           'choices'    => json_encode([
               'Overlaying digital content onto real-world exhibits via devices',
               'A type of acrylic paint',
               'A gallery lighting technique',
               'A cataloging system',
           ]),
           'answer'     => 'Overlaying digital content onto real-world exhibits via devices',
           'explanation'=> 'AR apps add interactive information to physical displays.',
           'created_at' => $now,
           'updated_at' => $now,
       ];

       //12
       $batch[] = [
           'subject_id' => 19,
           'part'       => 7,
           'question'   => 'Which open educational resource (OER) supports free access to arts curricula?',
           'choices'    => json_encode([
               'Creative Commons–licensed materials',
               'Proprietary textbooks',
               'Paid videos',
               'Commercial software suites',
           ]),
           'answer'     => 'Creative Commons–licensed materials',
           'explanation'=> 'OER with CC licenses allow adaptation and free distribution of curricula.',
           'created_at' => $now,
           'updated_at' => $now,
       ];

       //13
       $batch[] = [
           'subject_id' => 19,
           'part'       => 7,
           'question'   => 'What is the benefit of virtual reality (VR) field trips in arts education?',
           'choices'    => json_encode([
               'Immersive experiencia in distant cultural sites',
               'Increased printing costs',
               'Reduced engagement',
               'Pre-recorded video only',
           ]),
           'answer'     => 'Immersive experiencia in distant cultural sites',
           'explanation'=> 'VR can transport learners to museums and heritage locations remotely.',
           'created_at' => $now,
           'updated_at' => $now,
       ];

       //14
       $batch[] = [
           'subject_id' => 19,
           'part'       => 7,
           'question'   => 'Which emerging technology allows sculptors to fabricate complex forms via layering?',
           'choices'    => json_encode([
               '3D printing',
               'Laser etching',
               'UV coating',
               'Digital painting',
           ]),
           'answer'     => '3D printing',
           'explanation'=> '3D printing uses additive manufacturing to create three-dimensional objects.',
           'created_at' => $now,
           'updated_at' => $now,
       ];

       //15
       $batch[] = [
           'subject_id' => 19,
           'part'       => 7,
           'question'   => 'What role do hashtags play in promoting student artwork on social media?',
           'choices'    => json_encode([
               'Increase visibility and engagement with audiences',
               'Restrict sharing to private groups',
               'Limit the number of images posted',
               'Automate grading',
           ]),
           'answer'     => 'Increase visibility and engagement with audiences',
           'explanation'=> 'Hashtags categorize content and connect to wider communities.',
           'created_at' => $now,
           'updated_at' => $now,
       ];

       //16
       $batch[] = [
           'subject_id' => 19,
           'part'       => 7,
           'question'   => 'Which software allows collaborative drawing in real-time online?',
           'choices'    => json_encode([
               'Online whiteboard platforms',
               'Text editors',
               'Spreadsheet software',
               'Email clients',
           ]),
           'answer'     => 'Online whiteboard platforms',
           'explanation'=> 'Tools like Miro or Jamboard enable synchronous visual collaboration.',
           'created_at' => $now,
           'updated_at' => $now,
       ];

       //17
       $batch[] = [
           'subject_id' => 19,
           'part'       => 7,
           'question'   => 'What is the advantage of open-source digital art software in education?',
           'choices'    => json_encode([
               'Free access and modifiability by users',
               'High subscription costs',
               'Proprietary restrictions',
               'Limited feature set',
           ]),
           'answer'     => 'Free access and modifiability by users',
           'explanation'=> 'Students can use and customize open-source tools without licensing fees.',
           'created_at' => $now,
           'updated_at' => $now,
       ];

       //18
       $batch[] = [
           'subject_id' => 19,
           'part'       => 7,
           'question'   => 'Which strategy supports universal access to digital art content for visually impaired learners?',
           'choices'    => json_encode([
               'Audio descriptions of visual elements',
               'High-resolution images only',
               'Text-only galleries',
               'Silent slideshows',
           ]),
           'answer'     => 'Audio descriptions of visual elements',
           'explanation'=> 'Audio descriptions convey visual art details through narration.',
           'created_at' => $now,
           'updated_at' => $now,
       ];

       //19
       $batch[] = [
           'subject_id' => 19,
           'part'       => 7,
           'question'   => 'What ethical issue arises when digitizing cultural artifacts?',
           'choices'    => json_encode([
               'Copyright and cultural ownership',
               'Lighting setup',
               'Seating arrangement',
               'Refreshment planning',
           ]),
           'answer'     => 'Copyright and cultural ownership',
           'explanation'=> 'Digitization must respect rights and permissions of cultural stakeholders.',
           'created_at' => $now,
           'updated_at' => $now,
       ];

       //20
       $batch[] = [
           'subject_id' => 19,
           'part'       => 7,
           'question'   => 'Which pedagogical approach combines game design elements with arts learning?',
           'choices'    => json_encode([
               'Game-based learning',
               'Lecture-based teaching',
               'Silent reading',
               'Fact memorization',
           ]),
           'answer'     => 'Game-based learning',
           'explanation'=> 'Game mechanics engage students interactively in arts concepts.',
           'created_at' => $now,
           'updated_at' => $now,
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
            $this->command->warn("Part 7 has only {$batchCount} questions. Minimum 20 required.");
        }

        // 3) Abort seeding if duplicates found or insufficient items
        if (!empty($dupes) || $batchCount < 20) {
            $this->command->info("Seeding aborted for part 7. Please resolve duplicates or add more questions.");
            return;
        }

        // 4) Insert all questions if checks pass
        DB::table('questions')->insert($batch);
        $this->command->info("{$batchCount} question(s) seeded for part 7.");
    }
}
