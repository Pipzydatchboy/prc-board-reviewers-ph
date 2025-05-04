<?php

namespace Database\Seeders\LET\Majorship\ValuesEducation;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ValuesEducationPart2Seeder extends Seeder
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

       // Part 2 – Question 1
       $batch[] = [
           'subject_id'   => 15,
           'part'         => 2,
           'question'     => 'What is the first stage in the five-step values formation model used in Values Education?',
           'choices'      => json_encode([
               'Action',
               'Judgment',
               'Awareness',
               'Habitualization',
           ]),
           'answer'       => 'Awareness',
           'explanation'  => 'Awareness involves recognizing and identifying values and their importance in one’s life.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];
       
       // Part 2 – Question 2
       $batch[] = [
           'subject_id'   => 15,
           'part'         => 2,
           'question'     => 'During which stage of values formation does an individual compare options to determine what is right?',
           'choices'      => json_encode([
               'Choice',
               'Judgment',
               'Action',
               'Awareness',
           ]),
           'answer'       => 'Judgment',
           'explanation'  => 'Judgment is the stage where one evaluates alternatives against value criteria before deciding.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];
       
       // Part 2 – Question 3
       $batch[] = [
           'subject_id'   => 15,
           'part'         => 2,
           'question'     => 'Which stage involves implementing one’s chosen value through concrete behavior?',
           'choices'      => json_encode([
               'Habitualization',
               'Action',
               'Awareness',
               'Judgment',
           ]),
           'answer'       => 'Action',
           'explanation'  => 'Action is the stage where values are exercised in real-life situations.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];
       
       // Part 2 – Question 4
       $batch[] = [
           'subject_id'   => 15,
           'part'         => 2,
           'question'     => 'In values formation, which stage refers to repeating chosen actions until they become part of one’s character?',
           'choices'      => json_encode([
               'Habitualization',
               'Choice',
               'Judgment',
               'Action',
           ]),
           'answer'       => 'Habitualization',
           'explanation'  => 'Habitualization consolidates values through continuous practice until they become habits.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];
       
       // Part 2 – Question 5
       $batch[] = [
           'subject_id'   => 15,
           'part'         => 2,
           'question'     => 'Which stage requires choosing to live by a value after evaluating its implications?',
           'choices'      => json_encode([
               'Awareness',
               'Choice',
               'Judgment',
               'Action',
           ]),
           'answer'       => 'Choice',
           'explanation'  => 'Choice is the deliberate decision to commit to a particular value among alternatives.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];
       
       // Part 2 – Question 6
       $batch[] = [
           'subject_id'   => 15,
           'part'         => 2,
           'question'     => 'Which factor is considered the primary agent of values formation for most individuals?',
           'choices'      => json_encode([
               'Media',
               'Peer group',
               'Family',
               'School',
           ]),
           'answer'       => 'Family',
           'explanation'  => 'Family serves as the first and most influential context for internalizing values in early life.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];
       
       // Part 2 – Question 7
       $batch[] = [
           'subject_id'   => 15,
           'part'         => 2,
           'question'     => 'Which social institution has a significant role in transmitting societal values through formal instruction?',
           'choices'      => json_encode([
               'Government',
               'School',
               'Family',
               'Economy',
           ]),
           'answer'       => 'School',
           'explanation'  => 'Schools impart values explicitly through curricula and implicitly through school culture.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];
       
       // Part 2 – Question 8
       $batch[] = [
           'subject_id'   => 15,
           'part'         => 2,
           'question'     => 'Which source of values shapes beliefs and norms through religious teachings?',
           'choices'      => json_encode([
               'Media',
               'Church',
               'Peers',
               'Family',
           ]),
           'answer'       => 'Church',
           'explanation'  => 'Religious institutions guide followers by teaching moral principles and practices.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];
       
       // Part 2 – Question 9
       $batch[] = [
           'subject_id'   => 15,
           'part'         => 2,
           'question'     => 'Which medium influences values by presenting role models and norms in visual and written forms?',
           'choices'      => json_encode([
               'Family',
               'Church',
               'Media',
               'School',
           ]),
           'answer'       => 'Media',
           'explanation'  => 'Media platforms transmit cultural values through stories, news, and entertainment.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];
       
       // Part 2 – Question 10
       $batch[] = [
           'subject_id'   => 15,
           'part'         => 2,
           'question'     => 'Which theoretical model explains moral behavior through stages of moral reasoning development?',
           'choices'      => json_encode([
               'Bloom’s Taxonomy',
               'Maslow’s Hierarchy',
               'Kohlberg’s Model',
               'Erikson’s Stages',
           ]),
           'answer'       => 'Kohlberg’s Model',
           'explanation'  => 'Kohlberg’s stages describe how moral judgment evolves from basic obedience to principled reasoning.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];
       
       // Part 2 – Question 11
       $batch[] = [
           'subject_id'   => 15,
           'part'         => 2,
           'question'     => 'Which stage in Piaget’s cognitive development involves children understanding rules but seeing them as absolute?',
           'choices'      => json_encode([
               'Preoperational',
               'Concrete operational',
               'Formal operational',
               'Sensorimotor',
           ]),
           'answer'       => 'Concrete operational',
           'explanation'  => 'In the concrete operational stage, children begin logical thought but view rules as fixed.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];
       
       // Part 2 – Question 12
       $batch[] = [
           'subject_id'   => 15,
           'part'         => 2,
           'question'     => 'Which concept refers to internalizing societal norms until they guide behavior automatically?',
           'choices'      => json_encode([
               'Socialization',
               'Habituation',
               'Acculturation',
               'Assimilation',
           ]),
           'answer'       => 'Socialization',
           'explanation'  => 'Socialization is the lifelong process by which individuals absorb culture and internalize values.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];
       
       // Part 2 – Question 13
       $batch[] = [
           'subject_id'   => 15,
           'part'         => 2,
           'question'     => 'Which process involves questioning and reflecting on values to clarify personal beliefs?',
           'choices'      => json_encode([
               'Values clarification',
               'Moral recovery',
               'Role playing',
               'Service learning',
           ]),
           'answer'       => 'Values clarification',
           'explanation'  => 'Values clarification encourages deliberate reflection to articulate and affirm one’s own values.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];
       
       // Part 2 – Question 14
       $batch[] = [
           'subject_id'   => 15,
           'part'         => 2,
           'question'     => 'Which term describes values learned through direct experience and trial-and-error?',
           'choices'      => json_encode([
               'Vicarious learning',
               'Experiential learning',
               'Didactic learning',
               'Observational learning',
           ]),
           'answer'       => 'Experiential learning',
           'explanation'  => 'Experiential learning embeds values through hands-on experiences and reflection.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];
       
       // Part 2 – Question 15
       $batch[] = [
           'subject_id'   => 15,
           'part'         => 2,
           'question'     => 'Which factor accelerates values conflict in a globalized society?',
           'choices'      => json_encode([
               'Cultural homogeneity',
               'Digital media',
               'Rural isolation',
               'Local traditions',
           ]),
           'answer'       => 'Digital media',
           'explanation'  => 'Digital media exposes individuals to diverse values quickly, sometimes creating conflicts.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];
       
       // Part 2 – Question 16
       $batch[] = [
           'subject_id'   => 15,
           'part'         => 2,
           'question'     => 'Which value category pertains to one’s sense of duty and social responsibility?',
           'choices'      => json_encode([
               'Personal values',
               'Social values',
               'Terminal values',
               'Instrumental values',
           ]),
           'answer'       => 'Social values',
           'explanation'  => 'Social values emphasize collective well-being and responsible participation in society.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];
       
       // Part 2 – Question 17
       $batch[] = [
           'subject_id'   => 15,
           'part'         => 2,
           'question'     => 'Which UNESCO program promotes ethical reflection and intercultural dialogue among youth?',
           'choices'      => json_encode([
               'UNESCO ASPnet',
               'Ethics Education Program',
               'Global Citizenship Education',
               'World Heritage Education',
           ]),
           'answer'       => 'Global Citizenship Education',
           'explanation'  => 'Global Citizenship Education fosters ethics and respect for diversity across cultures.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];
       
       // Part 2 – Question 18
       $batch[] = [
           'subject_id'   => 15,
           'part'         => 2,
           'question'     => 'Which model describes the interaction of knowledge, feelings, and behaviors in values formation?',
           'choices'      => json_encode([
               'Cognitive-affective-behavioral model',
               'Maslow’s hierarchy',
               'Systems theory',
               'Behavioral model',
           ]),
           'answer'       => 'Cognitive-affective-behavioral model',
           'explanation'  => 'This model integrates thoughts, emotions, and actions as interrelated components of value development.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];
       
       // Part 2 – Question 19
       $batch[] = [
           'subject_id'   => 15,
           'part'         => 2,
           'question'     => 'Which process involves transferring values from one generation to the next?',
           'choices'      => json_encode([
               'Social transmission',
               'Cultural shock',
               'Digitalization',
               'Globalization',
           ]),
           'answer'       => 'Social transmission',
           'explanation'  => 'Social transmission occurs as values and norms are passed down through cultural and familial practices.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];
       
       // Part 2 – Question 20
       $batch[] = [
           'subject_id'   => 15,
           'part'         => 2,
           'question'     => 'Which assessment tool measures an individual’s value preferences and orientations?',
           'choices'      => json_encode([
               'Likert scale survey',
               'Personality inventory',
               'Value survey map',
               'Achievement test',
           ]),
           'answer'       => 'Value survey map',
           'explanation'  => 'A value survey map plots personal value priorities to aid self-awareness and development.',
           'created_at'   => $now,
           'updated_at'   => $now,
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
            $this->command->warn("Part 2 has only {$batchCount} questions. Minimum 20 required.");
        }

        // 3) Abort seeding if duplicates found or insufficient items
        if (!empty($dupes) || $batchCount < 20) {
            $this->command->info("Seeding aborted for part 2. Please resolve duplicates or add more questions.");
            return;
        }

        // 4) Insert all questions if checks pass
        DB::table('questions')->insert($batch);
        $this->command->info("{$batchCount} question(s) seeded for part 2.");
    }
}
