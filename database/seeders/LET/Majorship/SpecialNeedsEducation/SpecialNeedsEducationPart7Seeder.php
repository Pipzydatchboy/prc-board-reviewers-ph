<?php

namespace Database\Seeders\LET\Majorship\SpecialNeedsEducation;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class SpecialNeedsEducationPart7Seeder extends Seeder
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

       // 121
       $batch[] = [
           'subject_id'   => 9,
           'part'         => 7,
           'question'     => 'Which is an example of a low-tech AAC device for nonverbal students?',
           'choices'      => json_encode([
               'Picture communication board',
               'Eye-tracking computer',
               'Speech-generating tablet',
               'Electronic keyboard'
           ]),
           'answer'       => 'Picture communication board',
           'explanation'  => 'Low-tech AAC includes non-electronic tools like picture boards for basic communication.',
           'created_at'   => $now,
           'updated_at'   => $now
       ];

       // 122
       $batch[] = [
           'subject_id'   => 9,
           'part'         => 7,
           'question'     => 'High-tech AAC devices typically include:',
           'choices'      => json_encode([
               'Speech-generating software',
               'Paper word cards',
               'Manual sign system',
               'Visual schedule chart'
           ]),
           'answer'       => 'Speech-generating software',
           'explanation'  => 'High-tech AAC uses electronic devices or apps to produce spoken messages.',
           'created_at'   => $now,
           'updated_at'   => $now
       ];

       // 123
       $batch[] = [
           'subject_id'   => 9,
           'part'         => 7,
           'question'     => 'Which accommodation modifies the format of assignments without changing learning expectations?',
           'choices'      => json_encode([
               'Allowing oral responses instead of written essays',
               'Reducing the number of quiz questions',
               'Omitting objectives from the lesson',
               'Extending the grading period'
           ]),
           'answer'       => 'Allowing oral responses instead of written essays',
           'explanation'  => 'Format accommodations change how students demonstrate learning without altering content.',
           'created_at'   => $now,
           'updated_at'   => $now
       ];

       // 124
       $batch[] = [
           'subject_id'   => 9,
           'part'         => 7,
           'question'     => 'Which modification alters the learning expectations for a student with significant delays?',
           'choices'      => json_encode([
               'Providing simplified tasks with fewer steps',
               'Extending time on tests',
               'Preferential seating',
               'Use of electronic organizer'
           ]),
           'answer'       => 'Providing simplified tasks with fewer steps',
           'explanation'  => 'Modifications change the curriculum demands to match a student’s abilities.',
           'created_at'   => $now,
           'updated_at'   => $now
       ];

       // 125
       $batch[] = [
           'subject_id'   => 9,
           'part'         => 7,
           'question'     => 'Universal Design for Learning encourages:',
           'choices'      => json_encode([
               'Designing lessons that accommodate diverse learners from the start',
               'Using a single mode of instruction',
               'Separating students by ability only',
               'Relying on standardized tests'
           ]),
           'answer'       => 'Designing lessons that accommodate diverse learners from the start',
           'explanation'  => 'UDL principles support multiple means of representation, engagement, and expression.',
           'created_at'   => $now,
           'updated_at'   => $now
       ];

       // 126
       $batch[] = [
           'subject_id'   => 9,
           'part'         => 7,
           'question'     => 'In co-teaching, the “one teach, one support” model involves:',
           'choices'      => json_encode([
               'One teacher delivers instruction while the other assists individual students',
               'Both teachers lecture together at the same time',
               'Teachers alternate teaching different content areas',
               'Students teach themselves without support'
           ]),
           'answer'       => 'One teacher delivers instruction while the other assists individual students',
           'explanation'  => 'This model allows one teacher to lead and the other to address student needs in real time.',
           'created_at'   => $now,
           'updated_at'   => $now
       ];

       // 127
       $batch[] = [
           'subject_id'   => 9,
           'part'         => 7,
           'question'     => 'The “parallel teaching” co-teaching approach requires:',
           'choices'      => json_encode([
               'Both teachers teaching the same content to half the class each',
               'One teacher instructing while the other observes',
               'Teachers switching off each day',
               'Students teaching each other'
           ]),
           'answer'       => 'Both teachers teaching the same content to half the class each',
           'explanation'  => 'Parallel teaching splits the group to provide smaller group instruction simultaneously.',
           'created_at'   => $now,
           'updated_at'   => $now
       ];

       // 128
       $batch[] = [
           'subject_id'   => 9,
           'part'         => 7,
           'question'     => 'Assistive technology implementation must include:',
           'choices'      => json_encode([
               'Training for both student and staff',
               'Providing device without instructions',
               'One-time trial only',
               'Exclusive parent use'
           ]),
           'answer'       => 'Training for both student and staff',
           'explanation'  => 'Proper training ensures effective and sustained use of AT supports.',
           'created_at'   => $now,
           'updated_at'   => $now
       ];

       // 129
       $batch[] = [
           'subject_id'   => 9,
           'part'         => 7,
           'question'     => 'An accommodation in the physical environment might include:',
           'choices'      => json_encode([
               'Lowering water fountain height',
               'Adding more test questions',
               'Changing curriculum content',
               'Reassigning teacher roles'
           ]),
           'answer'       => 'Lowering water fountain height',
           'explanation'  => 'Environmental accommodations remove physical barriers to access facilities.',
           'created_at'   => $now,
           'updated_at'   => $now
       ];

       // 130
       $batch[] = [
           'subject_id'   => 9,
           'part'         => 7,
           'question'     => 'A sensory-friendly classroom design might feature:',
           'choices'      => json_encode([
               'Soft lighting and reduced noise levels',
               'Bright strobe lights',
               'Constant background music',
               'Crowded seating arrangements'
           ]),
           'answer'       => 'Soft lighting and reduced noise levels',
           'explanation'  => 'Sensory-friendly settings minimize overstimulation for students with sensory sensitivities.',
           'created_at'   => $now,
           'updated_at'   => $now
       ];

       // 131
       $batch[] = [
           'subject_id'   => 9,
           'part'         => 7,
           'question'     => 'A peer buddy system primarily provides:',
           'choices'      => json_encode([
               'Social and academic support from classmates',
               'Exclusive teacher intervention',
               'Isolation of students with disabilities',
               'Standard instructional delivery'
           ]),
           'answer'       => 'Social and academic support from classmates',
           'explanation'  => 'Peer buddies help with inclusion and skills through modeling and assistance.',
           'created_at'   => $now,
           'updated_at'   => $now
       ];

       // 132
       $batch[] = [
           'subject_id'   => 9,
           'part'         => 7,
           'question'     => 'Inclusion is best defined as:',
           'choices'      => json_encode([
               'Educating all students together with appropriate supports',
               'Separating students in special classrooms',
               'Mainstreaming only high achievers',
               'Excluding students with disabilities from mainstream activities'
           ]),
           'answer'       => 'Educating all students together with appropriate supports',
           'explanation'  => 'Inclusion ensures students learn alongside peers with individualized accommodations.',
           'created_at'   => $now,
           'updated_at'   => $now
       ];

       // 133
       $batch[] = [
           'subject_id'   => 9,
           'part'         => 7,
           'question'     => 'Assistive listening devices in the classroom help students with:',
           'choices'      => json_encode([
               'Hearing impairments',
               'Visual impairments',
               'Motor coordination issues',
               'Fine motor delays'
           ]),
           'answer'       => 'Hearing impairments',
           'explanation'  => 'Devices like FM systems transmit the teacher’s voice directly to the listener.',
           'created_at'   => $now,
           'updated_at'   => $now
       ];

       // 134
       $batch[] = [
           'subject_id'   => 9,
           'part'         => 7,
           'question'     => 'Switch-accessible toys and devices are beneficial for students with:',
           'choices'      => json_encode([
               'Physical impairments affecting hand use',
               'Speech delays only',
               'Typical development',
               'Cognitive giftedness'
           ]),
           'answer'       => 'Physical impairments affecting hand use',
           'explanation'  => 'Switches enable control of devices for students who cannot use standard buttons.',
           'created_at'   => $now,
           'updated_at'   => $now
       ];

       // 135
       $batch[] = [
           'subject_id'   => 9,
           'part'         => 7,
           'question'     => 'Closed captioning on videos is an accommodation for students with:',
           'choices'      => json_encode([
               'Hearing impairments',
               'Visual impairments',
               'Motor impairments',
               'Emotional disturbances'
           ]),
           'answer'       => 'Hearing impairments',
           'explanation'  => 'Captions provide text representation of audio content for accessibility.',
           'created_at'   => $now,
           'updated_at'   => $now
       ];

       // 136
       $batch[] = [
           'subject_id'   => 9,
           'part'         => 7,
           'question'     => 'Flexible seating arrangements in an inclusive classroom promote:',
           'choices'      => json_encode([
               'Choice and comfort for diverse learners',
               'Uniform seating only',
               'Teacher-led seating charts',
               'Fixed rows and columns'
           ]),
           'answer'       => 'Choice and comfort for diverse learners',
           'explanation'  => 'Flexible seating allows students to select seating to support attention and comfort.',
           'created_at'   => $now,
           'updated_at'   => $now
       ];

       // 137
       $batch[] = [
           'subject_id'   => 9,
           'part'         => 7,
           'question'     => 'Screen-reading software supports students with:',
           'choices'      => json_encode([
               'Visual impairments and reading difficulties',
               'Hearing loss',
               'Motor delays only',
               'Social skill deficits'
           ]),
           'answer'       => 'Visual impairments and reading difficulties',
           'explanation'  => 'Screen readers convert text to speech to aid comprehension for those with visual or decoding challenges.',
           'created_at'   => $now,
           'updated_at'   => $now
       ];

       // 138
       $batch[] = [
           'subject_id'   => 9,
           'part'         => 7,
           'question'     => 'Adjustable furniture in classrooms is an example of:',
           'choices'      => json_encode([
               'Universal design',
               'Assistive listening devices',
               'High-tech AAC',
               'Standardized tests'
           ]),
           'answer'       => 'Universal design',
           'explanation'  => 'Adjustable tables and chairs meet the needs of various body sizes and abilities.',
           'created_at'   => $now,
           'updated_at'   => $now
       ];

       // 139
       $batch[] = [
           'subject_id'   => 9,
           'part'         => 7,
           'question'     => 'A referral to a speech-language pathologist is most appropriate when a student presents with:',
           'choices'      => json_encode([
               'Significant speech or language delays',
               'Only motor coordination issues',
               'Behavioral problems only',
               'Advanced reading skills'
           ]),
           'answer'       => 'Significant speech or language delays',
           'explanation'  => 'SLPs assess and provide intervention for speech and language disorders.',
           'created_at'   => $now,
           'updated_at'   => $now
       ];

       // 140
       $batch[] = [
           'subject_id'   => 9,
           'part'         => 7,
           'question'     => 'Key to successful AT use in schools is:',
           'choices'      => json_encode([
               'Ongoing training and technical support',
               'One-time device issue',
               'Students managing alone without guidance',
               'Replacing all curriculum materials'
           ]),
           'answer'       => 'Ongoing training and technical support',
           'explanation'  => 'Continuous support ensures AT remains effective and addresses emerging needs.',
           'created_at'   => $now,
           'updated_at'   => $now
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
