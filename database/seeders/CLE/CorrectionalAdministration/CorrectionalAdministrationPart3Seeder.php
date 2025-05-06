<?php

namespace Database\Seeders\CLE\CorrectionalAdministration;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class CorrectionalAdministrationPart3Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $now = Carbon::now();

//Questions Starts here... 
$batch = [];

// 1
$batch[] = [
  'subject_id'  => 25,
  'part'        => 3,
  'question'    => 'What is the primary focus of cognitive‑behavioral therapy in correctional settings?',
  'choices'     => json_encode([
    'Emotional regulation',
    'Criminal thinking errors',
    'Physical fitness',
    'Substance abstinence',
  ]),
  'answer'      => 'Criminal thinking errors',
  'explanation' => 'CBT targets and modifies distorted thought patterns that lead to criminal behavior.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 2
$batch[] = [
  'subject_id'  => 25,
  'part'        => 3,
  'question'    => 'Which group therapy model in corrections specifically addresses criminal thinking?',
  'choices'     => json_encode([
    'Art therapy',
    'Moral Reconation Therapy',
    'Psychoanalysis',
    'Recreational therapy',
  ]),
  'answer'      => 'Moral Reconation Therapy',
  'explanation' => 'MRT is a structured group program that helps offenders confront and change moral reasoning deficits.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 3
$batch[] = [
  'subject_id'  => 25,
  'part'        => 3,
  'question'    => 'Behavior modification programs in prison are based primarily on which principle?',
  'choices'     => json_encode([
    'Classical conditioning',
    'Negative punishment',
    'Positive reinforcement',
    'Retribution',
  ]),
  'answer'      => 'Positive reinforcement',
  'explanation' => 'They reward desirable behaviors to increase the likelihood they will recur.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 4
$batch[] = [
  'subject_id'  => 25,
  'part'        => 3,
  'question'    => 'Which program is designed to teach inmates marketable work skills?',
  'choices'     => json_encode([
    'Educational tutoring',
    'Vocational training program',
    'Meditation classes',
    'Group counseling',
  ]),
  'answer'      => 'Vocational training program',
  'explanation' => 'These programs provide technical and trade skills to facilitate employment after release.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 5
$batch[] = [
  'subject_id'  => 25,
  'part'        => 3,
  'question'    => 'What is the main goal of the Therapeutic Community Model Program (TCMP)?',
  'choices'     => json_encode([
    'Increase security measures',
    'Encourage self‑help and accountability',
    'Provide solitary reflection time',
    'Deliver medical treatment',
  ]),
  'answer'      => 'Encourage self‑help and accountability',
  'explanation' => 'TCMP uses a peer‑based community to foster personal responsibility and social skills.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 6
$batch[] = [
  'subject_id'  => 25,
  'part'        => 3,
  'question'    => 'Which therapy modality uses role‑playing to improve emotional responses?',
  'choices'     => json_encode([
    'Psychodrama',
    'Music therapy',
    'Biofeedback',
    'Dialectical behavior therapy',
  ]),
  'answer'      => 'Psychodrama',
  'explanation' => 'Psychodrama engages participants in enactment to explore emotions and interpersonal dynamics.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 7
$batch[] = [
  'subject_id'  => 25,
  'part'        => 3,
  'question'    => 'A key component of reentry support under TCMP is:',
  'choices'     => json_encode([
    'Solitary confinement',
    'Peer support groups',
    'Increased surveillance',
    'Extended sentences',
  ]),
  'answer'      => 'Peer support groups',
  'explanation' => 'These groups create a community of accountability and mutual aid for participants.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 8
$batch[] = [
  'subject_id'  => 25,
  'part'        => 3,
  'question'    => 'What is the primary purpose of a halfway house in correctional administration?',
  'choices'     => json_encode([
    'Maximum security detention',
    'Transitional living support',
    'Legal representation',
    'Intake assessment',
  ]),
  'answer'      => 'Transitional living support',
  'explanation' => 'Halfway houses provide structure and supervision to ease the transition back into society.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 9
$batch[] = [
  'subject_id'  => 25,
  'part'        => 3,
  'question'    => 'Which form of expressive therapy is used in prisons to promote emotional healing?',
  'choices'     => json_encode([
    'Vocational therapy',
    'Restorative justice',
    'Expressive therapy',
    'Recreational therapy',
  ]),
  'answer'      => 'Expressive therapy',
  'explanation' => 'It uses art, music, or drama to help inmates process emotions and trauma.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 10
$batch[] = [
  'subject_id'  => 25,
  'part'        => 3,
  'question'    => 'Which UN instrument affirms prisoners’ right to education and rehabilitation?',
  'choices'     => json_encode([
    'Nelson Mandela Rules',
    'Tokyo Rules',
    'Bangkok Rules',
    'Riyadh Guidelines',
  ]),
  'answer'      => 'Nelson Mandela Rules',
  'explanation' => 'The Mandela Rules set minimum treatment standards, including access to education and programs.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 11
$batch[] = [
  'subject_id'  => 25,
  'part'        => 3,
  'question'    => 'Prison substance abuse programs often follow which model?',
  'choices'     => json_encode([
    'Biomedical model',
    'Twelve‑step program',
    'Psychoanalytic model',
    'Restorative justice',
  ]),
  'answer'      => 'Twelve‑step program',
  'explanation' => '12‑step programs use peer support and structured steps to address addiction.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 12
$batch[] = [
  'subject_id'  => 25,
  'part'        => 3,
  'question'    => 'Which indicator is most commonly used to evaluate reintegration program success?',
  'choices'     => json_encode([
    'Recidivism rate',
    'Inmate attendance',
    'Facility occupancy',
    'Sentence length',
  ]),
  'answer'      => 'Recidivism rate',
  'explanation' => 'Lower recidivism indicates more effective rehabilitation and reintegration.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 13
$batch[] = [
  'subject_id'  => 25,
  'part'        => 3,
  'question'    => 'Family involvement in rehabilitation programs primarily provides:',
  'choices'     => json_encode([
    'Legal advice',
    'Emotional support',
    'Security oversight',
    'Financial penalties',
  ]),
  'answer'      => 'Emotional support',
  'explanation' => 'Positive family engagement boosts morale and motivation for change.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 14
$batch[] = [
  'subject_id'  => 25,
  'part'        => 3,
  'question'    => 'Cognitive restructuring techniques aim to:',
  'choices'     => json_encode([
    'Teach work skills',
    'Change irrational beliefs',
    'Increase physical strength',
    'Enhance surveillance',
  ]),
  'answer'      => 'Change irrational beliefs',
  'explanation' => 'They help offenders identify and alter distorted thought patterns.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 15
$batch[] = [
  'subject_id'  => 25,
  'part'        => 3,
  'question'    => 'Which international standard provides guidelines on prisoner rehabilitation?',
  'choices'     => json_encode([
    'Geneva Conventions',
    'Nelson Mandela Rules',
    'Universal Declaration of Human Rights',
    'International Criminal Court Statute',
  ]),
  'answer'      => 'Nelson Mandela Rules',
  'explanation' => 'They outline treatment standards, including rehabilitation and reintegration programs.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 16
$batch[] = [
  'subject_id'  => 25,
  'part'        => 3,
  'question'    => 'Which modality uses experienced inmates to guide others through rehabilitation?',
  'choices'     => json_encode([
    'Professional counseling',
    'Inmate peer mentoring',
    'Parole supervision',
    'Medical evaluation',
  ]),
  'answer'      => 'Inmate peer mentoring',
  'explanation' => 'Peer mentors leverage shared experience to support behavior change.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 17
$batch[] = [
  'subject_id'  => 25,
  'part'        => 3,
  'question'    => 'Vocational therapy in correctional settings focuses on:',
  'choices'     => json_encode([
    'Physical fitness',
    'Skill development for employment',
    'Group therapy',
    'Substance counseling',
  ]),
  'answer'      => 'Skill development for employment',
  'explanation' => 'It combines therapeutic principles with hands‑on job training.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 18
$batch[] = [
  'subject_id'  => 25,
  'part'        => 3,
  'question'    => 'Community‑based organizations in reintegration primarily provide:',
  'choices'     => json_encode([
    'Security patrols',
    'Support services and job placement',
    'Court advocacy',
    'Inmate transport',
  ]),
  'answer'      => 'Support services and job placement',
  'explanation' => 'They help ex‑PDLs access housing, employment, and counseling in the community.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 19
$batch[] = [
  'subject_id'  => 25,
  'part'        => 3,
  'question'    => 'Which program specifically addresses anger management for inmates?',
  'choices'     => json_encode([
    'Anger management program',
    'Vocational workshop',
    'Recreational activity',
    'Medical screening',
  ]),
  'answer'      => 'Anger management program',
  'explanation' => 'These programs teach coping strategies to control aggressive impulses.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 20
$batch[] = [
  'subject_id'  => 25,
  'part'        => 3,
  'question'    => 'What is the ultimate goal of rehabilitation in correctional administration?',
  'choices'     => json_encode([
    'Increase prison revenue',
    'Reduce recidivism',
    'Extend sentence length',
    'Enhance facility security',
  ]),
  'answer'      => 'Reduce recidivism',
  'explanation' => 'Effective rehabilitation leads to fewer returns to the criminal justice system.',
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
            $this->command->warn("Part 3 has only {$batchCount} questions. Minimum 20 required.");
        }

        // 3) Abort seeding if duplicates found or insufficient items
        if (!empty($dupes) || $batchCount < 20) {
            $this->command->info("Seeding aborted for part 3. Please resolve duplicates or add more questions.");
            return;
        }

        // 4) Insert all questions if checks pass
        DB::table('questions')->insert($batch);
        $this->command->info("{$batchCount} question(s) seeded for part 3.");
    }
}
