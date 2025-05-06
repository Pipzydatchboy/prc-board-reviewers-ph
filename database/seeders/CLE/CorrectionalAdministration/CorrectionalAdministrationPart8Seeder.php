<?php

namespace Database\Seeders\CLE\CorrectionalAdministration;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class CorrectionalAdministrationPart8Seeder extends Seeder
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
  'part'        => 8,
  'question'    => 'What is the primary objective of a social reintegration program for PDLs?',
  'choices'     => json_encode([
    'Reduce recidivism',
    'Extend sentence length',
    'Increase isolation',
    'Enhance surveillance',
  ]),
  'answer'      => 'Reduce recidivism',
  'explanation' => 'Social reintegration programs aim to support PDLs in becoming productive members of society and thus lower reoffending rates.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 2
$batch[] = [
  'subject_id'  => 25,
  'part'        => 8,
  'question'    => 'Which program provides PDLs with basic financial management skills?',
  'choices'     => json_encode([
    'Anger Management',
    'Financial Literacy Workshop',
    'Medical Screening',
    'Crisis Negotiation Training',
  ]),
  'answer'      => 'Financial Literacy Workshop',
  'explanation' => 'Financial literacy workshops teach budgeting, saving, and responsible money management to support reintegration.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 3
$batch[] = [
  'subject_id'  => 25,
  'part'        => 8,
  'question'    => 'What is the role of a case manager in correctional reintegration?',
  'choices'     => json_encode([
    'Oversee security operations',
    'Coordinate individualized release plans',
    'Conduct laboratory tests',
    'Supervise cellblock inspections',
  ]),
  'answer'      => 'Coordinate individualized release plans',
  'explanation' => 'Case managers assess needs and arrange services—such as housing, employment, and counseling—for each PDL.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 4
$batch[] = [
  'subject_id'  => 25,
  'part'        => 8,
  'question'    => 'Which human‑rights program ensures PDLs can file complaints without fear of retaliation?',
  'choices'     => json_encode([
    'Grievance Redress Mechanism',
    'Routine Visitation',
    'Vocational Training',
    'Medical Examination',
  ]),
  'answer'      => 'Grievance Redress Mechanism',
  'explanation' => 'A formal grievance mechanism allows PDLs to report abuses and ensures protective measures are in place.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 5
$batch[] = [
  'subject_id'  => 25,
  'part'        => 8,
  'question'    => 'Which program focuses on restoring family relationships for incoming PDLs?',
  'choices'     => json_encode([
    'Family Reunification Program',
    'Anger Management Program',
    'Substance Abuse Counseling',
    'Escape Contingency Plan',
  ]),
  'answer'      => 'Family Reunification Program',
  'explanation' => 'Family reunification initiatives facilitate communication and visitation to strengthen support networks.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 6
$batch[] = [
  'subject_id'  => 25,
  'part'        => 8,
  'question'    => 'What is a restorative justice circle?',
  'choices'     => json_encode([
    'Group therapy for staff',
    'Peer‑led discussion involving PDLs, victims, and community',
    'Vocational skills training',
    'Security briefing',
  ]),
  'answer'      => 'Peer‑led discussion involving PDLs, victims, and community',
  'explanation' => 'Restorative justice circles provide a forum for dialogue, accountability, and healing among all stakeholders.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 7
$batch[] = [
  'subject_id'  => 25,
  'part'        => 8,
  'question'    => 'Which NGO partnership is commonly used to support reintegration services?',
  'choices'     => json_encode([
    'Local shelter and job placement agencies',
    'Crisis Negotiation Team',
    'Probation Officer Unit',
    'Medical Unit',
  ]),
  'answer'      => 'Local shelter and job placement agencies',
  'explanation' => 'Partnerships with shelters and employment services help PDLs secure housing and work upon release.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 8
$batch[] = [
  'subject_id'  => 25,
  'part'        => 8,
  'question'    => 'Which internal committee monitors human‑rights compliance in a facility?',
  'choices'     => json_encode([
    'Rights Protection Committee',
    'Disciplinary Committee',
    'Classification Committee',
    'Visitation Committee',
  ]),
  'answer'      => 'Rights Protection Committee',
  'explanation' => 'A dedicated committee oversees adherence to legal standards and addresses rights‑related issues.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 9
$batch[] = [
  'subject_id'  => 25,
  'part'        => 8,
  'question'    => 'What is the purpose of a community service order for PDLs?',
  'choices'     => json_encode([
    'Serve part of sentence by working for community benefit',
    'Attend daily lab tests',
    'Undergo segregation',
    'Submit monthly reports',
  ]),
  'answer'      => 'Serve part of sentence by working for community benefit',
  'explanation' => 'Community service orders engage PDLs in constructive tasks that aid rehabilitation and public welfare.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 10
$batch[] = [
  'subject_id'  => 25,
  'part'        => 8,
  'question'    => 'Which instrument guides psychosocial support services for PDLs?',
  'choices'     => json_encode([
    'Mental Health Protocol',
    'Booking Register',
    'Movement Log',
    'Escape Contingency Plan',
  ]),
  'answer'      => 'Mental Health Protocol',
  'explanation' => 'Protocols outline assessment and treatment procedures for counseling and mental‑health care.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 11
$batch[] = [
  'subject_id'  => 25,
  'part'        => 8,
  'question'    => 'Which program supports PDLs in acquiring vocational skills before release?',
  'choices'     => json_encode([
    'Prison Industry Program',
    'Medical Screening Program',
    'Visitation Program',
    'Lockdown Drill',
  ]),
  'answer'      => 'Prison Industry Program',
  'explanation' => 'Prison industries offer hands‑on training in trades to enhance employability upon release.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 12
$batch[] = [
  'subject_id'  => 25,
  'part'        => 8,
  'question'    => 'What is the function of a Reception and Diagnostic Center (RDC)?',
  'choices'     => json_encode([
    'Assess and classify incoming PDLs’ needs',
    'Conduct riot control',
    'Manage visitation schedules',
    'Oversee staff training',
  ]),
  'answer'      => 'Assess and classify incoming PDLs’ needs',
  'explanation' => 'RDCs perform health, security, and program needs evaluations to inform placement and services.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 13
$batch[] = [
  'subject_id'  => 25,
  'part'        => 8,
  'question'    => 'Which community‑based organization often assists former PDLs with housing?',
  'choices'     => json_encode([
    'Shelter NGO',
    'Security Agency',
    'Crisis Response Team',
    'Disciplinary Committee',
  ]),
  'answer'      => 'Shelter NGO',
  'explanation' => 'Shelter NGOs provide transitional or permanent housing options and supportive services.',
  'created_at'  => $now,
  'updated_at'  =>$now,
];

// 14
$batch[] = [
  'subject_id'  => 25,
  'part'        => 8,
  'question'    => 'Which staff training ensures cultural sensitivity towards PDLs’ backgrounds?',
  'choices'     => json_encode([
    'Cultural Competency Workshop',
    'Fire Safety Drill',
    'Medical First Aid',
    'Budget Planning Seminar',
  ]),
  'answer'      => 'Cultural Competency Workshop',
  'explanation' => 'Workshops educate staff on respecting diverse cultures and reducing bias in interactions.',
  'created_at'  => $now,
  'updated_at'  =>$now,
];

// 15
$batch[] = [
  'subject_id'  => 25,
  'part'        => 8,
  'question'    => 'What is the main goal of a grievance redress hearing?',
  'choices'     => json_encode([
    'Resolve PDLs’ complaints impartially',
    'Plan daily activities',
    'Schedule headcounts',
    'Authorize bail',
  ]),
  'answer'      => 'Resolve PDLs’ complaints impartially',
  'explanation' => 'Hearings allow structured review of grievances to ensure fairness and corrective action.',
  'created_at'  => $now,
  'updated_at'  =>$now,
];

// 16
$batch[] = [
  'subject_id'  => 25,
  'part'        => 8,
  'question'    => 'Which evaluation tool measures a PDL’s readiness for community integration?',
  'choices'     => json_encode([
    'Reintegration Assessment Scale',
    'Incident Report',
    'Movement Log',
    'Booking Sheet',
  ]),
  'answer'      => 'Reintegration Assessment Scale',
  'explanation' => 'Scales assess skills, support networks, and risks to inform release decisions and service plans.',
  'created_at'  => $now,
  'updated_at'  =>$now,
];

// 17
$batch[] = [
  'subject_id'  => 25,
  'part'        => 8,
  'question'    => 'Which program specifically addresses anger management for PDLs?',
  'choices'     => json_encode([
    'Anger Management Program',
    'Community Service Order',
    'Intake Assessment',
    'Solitary Confinement',
  ]),
  'answer'      => 'Anger Management Program',
  'explanation' => 'Anger management programs teach coping strategies and emotional regulation techniques.',
  'created_at'  => $now,
  'updated_at'  =>$now,
];

// 18
$batch[] = [
  'subject_id'  => 25,
  'part'        => 8,
  'question'    => 'Which legal aid service is commonly provided to PDLs?',
  'choices'     => json_encode([
    'Pro bono counsel',
    'Fire safety training',
    'Budgeting workshop',
    'CCTV monitoring',
  ]),
  'answer'      => 'Pro bono counsel',
  'explanation' => 'Free legal assistance ensures PDLs have representation for appeals and other legal needs.',
  'created_at'  => $now,
  'updated_at'  =>$now,
];

// 19
$batch[] = [
  'subject_id'  => 25,
  'part'        => 8,
  'question'    => 'Which program uses experienced PDLs to mentor peers?',
  'choices'     => json_encode([
    'Peer Mentoring Program',
    'Medical Screening Program',
    'Visitation Program',
    'Count Drill',
  ]),
  'answer'      => 'Peer Mentoring Program',
  'explanation' => 'Trained peer mentors provide support, guidance, and positive role modeling to fellow PDLs.',
  'created_at'  => $now,
  'updated_at'  =>$now,
];

// 20
$batch[] = [
  'subject_id'  => 25,
  'part'        => 8,
  'question'    => 'Which international standard emphasizes PDLs’ right to rehabilitation?',
  'choices'     => json_encode([
    'Nelson Mandela Rules',
    'Tokyo Rules',
    'Bangkok Rules',
    'Riyadh Guidelines',
  ]),
  'answer'      => 'Nelson Mandela Rules',
  'explanation' => 'The Mandela Rules state that rehabilitation and social reintegration are essential objectives of imprisonment.',
  'created_at'  => $now,
  'updated_at'  =>$now,
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
            $this->command->warn("Part 8 has only {$batchCount} questions. Minimum 20 required.");
        }

        // 3) Abort seeding if duplicates found or insufficient items
        if (!empty($dupes) || $batchCount < 20) {
            $this->command->info("Seeding aborted for part 8. Please resolve duplicates or add more questions.");
            return;
        }

        // 4) Insert all questions if checks pass
        DB::table('questions')->insert($batch);
        $this->command->info("{$batchCount} question(s) seeded for part 8.");
    }
}
