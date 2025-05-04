<?php

namespace Database\Seeders\LET\Majorship\CultureAndArtsEducation;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class CultureAndArtsEducationPart10Seeder extends Seeder
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

       // Part 10: Community Engagement & Outreach

       //1
       $batch[] = [
           'subject_id' => 19,
           'part'       => 10,
           'question'   => 'What term describes art initiatives designed to involve and benefit local communities?',
           'choices'    => json_encode([
               'Community arts',
               'Commercial art',
               'Studio art',
               'Gallery art',
           ]),
           'answer'     => 'Community arts',
           'explanation'=> 'Community arts emphasize participation, collaboration, and local cultural expression.',
           'created_at' => $now,
           'updated_at' => $now,
       ];

       //2
       $batch[] = [
           'subject_id' => 19,
           'part'       => 10,
           'question'   => 'Which strategy helps identify target audiences for outreach programs?',
           'choices'    => json_encode([
               'Audience profiling',
               'Random sampling',
               'Open-door policy only',
               'Internal staff brainstorm',
           ]),
           'answer'     => 'Audience profiling',
           'explanation'=> 'Profiling examines demographics, interests, and needs to tailor engagement.',
           'created_at' => $now,
           'updated_at' => $now,
       ];

       //3
       $batch[] = [
           'subject_id' => 19,
           'part'       => 10,
           'question'   => 'What is a public art project?',
           'choices'    => json_encode([
               'Artworks installed or performed in public spaces',
               'Art sold in private galleries',
               'Art classes in schools only',
               'Art contests',
           ]),
           'answer'     => 'Artworks installed or performed in public spaces',
           'explanation'=> 'Public art engages community by placing art in accessible, communal locations.',
           'created_at' => $now,
           'updated_at' => $now,
       ];

       //4
       $batch[] = [
           'subject_id' => 19,
           'part'       => 10,
           'question'   => 'Which partnership model involves schools and arts organizations collaborating on curriculum?',
           'choices'    => json_encode([
               'Arts-in-education partnership',
               'Franchise model',
               'Solo artist residency',
               'Online tutoring',
           ]),
           'answer'     => 'Arts-in-education partnership',
           'explanation'=> 'These partnerships integrate arts content and professional artists into classrooms.',
           'created_at' => $now,
           'updated_at' => $now,
       ];

       //5
       $batch[] = [
           'subject_id' => 19,
           'part'       => 10,
           'question'   => 'What outreach tool uses printed materials distributed in the community to promote programs?',
           'choices'    => json_encode([
               'Flyers and brochures',
               'Tweet storms',
               'Virtual reality tours',
               'Podcast interviews',
           ]),
           'answer'     => 'Flyers and brochures',
           'explanation'=> 'Printed collateral remains an effective way to reach local audiences.',
           'created_at' => $now,
           'updated_at' => $now,
       ];

       //6
       $batch[] = [
           'subject_id' => 19,
           'part'       => 10,
           'question'   => 'Which role recruits and trains volunteers for arts events?',
           'choices'    => json_encode([
               'Volunteer coordinator',
               'Art director',
               'Technical director',
               'Marketing manager',
           ]),
           'answer'     => 'Volunteer coordinator',
           'explanation'=> 'Volunteer coordinators manage recruitment, training, and scheduling of volunteers.',
           'created_at' => $now,
           'updated_at' => $now,
       ];

       //7
       $batch[] = [
           'subject_id' => 19,
           'part'       => 10,
           'question'   => 'Which evaluation metric measures participant satisfaction in community programs?',
           'choices'    => json_encode([
               'Survey feedback',
               'Ticket sales only',
               'Press coverage',
               'Internal memos',
           ]),
           'answer'     => 'Survey feedback',
           'explanation'=> 'Surveys capture attendees’ perceptions, needs, and satisfaction levels.',
           'created_at' => $now,
           'updated_at' => $now,
       ];

       //8
       $batch[] = [
           'subject_id' => 19,
           'part'       => 10,
           'question'   => 'What is a community advisory panel?',
           'choices'    => json_encode([
               'Group of stakeholders providing program guidance',
               'Pricing committee',
               'Technical crew team',
               'Art purchase committee',
           ]),
           'answer'     => 'Group of stakeholders providing program guidance',
           'explanation'=> 'Advisory panels ensure community voices shape program design and outcomes.',
           'created_at' => $now,
           'updated_at' => $now,
       ];

       //9
       $batch[] = [
           'subject_id' => 19,
           'part'       => 10,
           'question'   => 'Which communication channel is best for real-time event updates to participants?',
           'choices'    => json_encode([
               'Social media live posts',
               'Printed newsletters',
               'Billboards',
               'Telephone hotline',
           ]),
           'answer'     => 'Social media live posts',
           'explanation'=> 'Social platforms allow instant, wide-reaching notifications and engagement.',
           'created_at' => $now,
           'updated_at' => $now,
       ];

       //10
       $batch[] = [
           'subject_id' => 19,
           'part'       => 10,
           'question'   => 'What is key to sustaining long-term community arts initiatives?',
           'choices'    => json_encode([
               'Ongoing community partnerships and local ownership',
               'One-time funding',
               'External consultant control',
               'Annual gala only',
           ]),
           'answer'     => 'Ongoing community partnerships and local ownership',
           'explanation'=> 'Sustainable initiatives require active collaboration and leadership by locals.',
           'created_at' => $now,
           'updated_at' => $now,
       ];

       //11
       $batch[] = [
           'subject_id' => 19,
           'part'       => 10,
           'question'   => 'Which tool helps visualize project timelines and milestones for outreach programs?',
           'choices'    => json_encode([
               'Gantt chart',
               'Pie chart',
               'Word cloud',
               'Mind map',
           ]),
           'answer'     => 'Gantt chart',
           'explanation'=> 'Gantt charts display tasks, durations, and sequencing over time.',
           'created_at' => $now,
           'updated_at' => $now,
       ];

       //12
       $batch[] = [
           'subject_id' => 19,
           'part'       => 10,
           'question'   => 'What is the purpose of a community needs assessment?',
           'choices'    => json_encode([
               'Identify local priorities and resources to inform program design',
               'Determine venue layouts',
               'Set ticket prices',
               'Plan internal staff meetings',
           ]),
           'answer'     => 'Identify local priorities and resources to inform program design',
           'explanation'=> 'Needs assessments gather data on community interests, gaps, and strengths.',
           'created_at' => $now,
           'updated_at' => $now,
       ];

       //13
       $batch[] = [
           'subject_id' => 19,
           'part'       => 10,
           'question'   => 'Which initiative brings art-making workshops directly to neighborhoods or schools?',
           'choices'    => json_encode([
               'Mobile arts program',
               'Gallery residency',
               'Online webinar only',
               'Museum display',
           ]),
           'answer'     => 'Mobile arts program',
           'explanation'=> 'Mobile programs use vehicles or pop-up setups to deliver arts experiences on-site.',
           'created_at' => $now,
           'updated_at' => $now,
       ];

       //14
       $batch[] = [
           'subject_id' => 19,
           'part'       => 10,
           'question'   => 'What is co-creation in community arts?',
           'choices'    => json_encode([
               'Collaborative artistic process involving residents',
               'Art critique by outsiders',
               'Exhibition-only approach',
               'Commercial art sales',
           ]),
           'answer'     => 'Collaborative artistic process involving residents',
           'explanation'=> 'Co-creation engages community members as active contributors to the artwork.',
           'created_at' => $now,
           'updated_at' => $now,
       ];

       //15
       $batch[] = [
           'subject_id' => 19,
           'part'       => 10,
           'question'   => 'Which outreach evaluation examines long-term community impact?',
           'choices'    => json_encode([
               'Impact assessment',
               'Satisfaction survey',
               'Attendance log',
               'Press release',
           ]),
           'answer'     => 'Impact assessment',
           'explanation'=> 'Impact assessments measure changes in community wellbeing after programs.',
           'created_at' => $now,
           'updated_at' => $now,
       ];

       //16
       $batch[] = [
           'subject_id' => 19,
           'part'       => 10,
           'question'   => 'What is digital storytelling in community engagement?',
           'choices'    => json_encode([
               'Using multimedia to share local stories and histories',
               'Printing storybooks only',
               'Radio broadcasting only',
               'Text messaging alerts',
           ]),
           'answer'     => 'Using multimedia to share local stories and histories',
           'explanation'=> 'Digital storytelling combines images, voice, and video to narrate community narratives.',
           'created_at' => $now,
           'updated_at' => $now,
       ];

       //17
       $batch[] = [
        'subject_id' => 19,
        'part'       => 10,
        'question'   => 'Which funding model relies on small public donations via online platforms?',
        'choices'    => json_encode([
            'Crowdfunding',
            'Corporate grant',
            'Government subsidy',
            'Major patron gift',
        ]),
        'answer'     => 'Crowdfunding',
        'explanation'=> 'Crowdfunding uses many small contributions to finance community-based art projects.',
        'created_at' => $now,
        'updated_at' => $now,
    ];

       //18
       $batch[] = [
           'subject_id' => 19,
           'part'       => 10,
           'question'   => 'What is participatory evaluation?',
           'choices'    => json_encode([
               'Involving community members in assessing program success',
               'External consultant reviews only',
               'Anonymous online surveys only',
               'Financial audit',
           ]),
           'answer'     => 'Involving community members in assessing program success',
           'explanation'=> 'Participatory evaluation engages stakeholders in reviewing outcomes and processes.',
           'created_at' => $now,
           'updated_at' => $now,
       ];

       //19
       $batch[] = [
           'subject_id' => 19,
           'part'       => 10,
           'question'   => 'Which outreach method uses live demonstrations or performances in public areas?',
           'choices'    =>	json_encode([
               'Street performance',
               'Gallery opening',
               'Closed workshop',
               'Ticketed recital',
           ]),
           'answer'     => 'Street performance',
           'explanation'=> 'Street performances bring art to open spaces, reaching passersby directly.',
           'created_at' => $now,
           'updated_at' => $now,
       ];

       //20
       $batch[] = [
           'subject_id' => 19,
           'part'       => 10,
           'question'   => 'What is the benefit of building local artist networks for community programs?',
           'choices'    => json_encode([
               'Enhances resource sharing, mentorship, and cultural exchange',
               'Increases competition only',
               'Limits program scope',
               'Ensures exclusivity',
           ]),
           'answer'     => 'Enhances resource sharing, mentorship, and cultural exchange',
           'explanation'=> 'Networks foster collaboration, knowledge transfer, and sustainable practices.',
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
            $this->command->warn("Part 10 has only {$batchCount} questions. Minimum 20 required.");
        }

        // 3) Abort seeding if duplicates found or insufficient items
        if (!empty($dupes) || $batchCount < 20) {
            $this->command->info("Seeding aborted for part 10. Please resolve duplicates or add more questions.");
            return;
        }

        // 4) Insert all questions if checks pass
        DB::table('questions')->insert($batch);
        $this->command->info("{$batchCount} question(s) seeded for part 10.");
    }
}
