<?php

namespace Database\Seeders\CLE\CorrectionalAdministration;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class CorrectionalAdministrationPart5Seeder extends Seeder
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
  'part'        => 5,
  'question'    => 'Which event involves a violent disturbance by a group of inmates against lawful authority?',
  'choices'     => json_encode([
    'Riot',
    'Mutiny',
    'Hunger strike',
    'Work slowdown',
  ]),
  'answer'      => 'Riot',
  'explanation' => 'A riot is a violent disturbance by inmates against the rules and authority of the facility.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 2
$batch[] = [
  'subject_id'  => 25,
  'part'        => 5,
  'question'    => 'Which team specializes in negotiating safe release of hostages within correctional facilities?',
  'choices'     => json_encode([
    'Crisis Negotiation Team',
    'Rapid Deployment Unit',
    'Forensic Psychology Unit',
    'Disciplinary Committee',
  ]),
  'answer'      => 'Crisis Negotiation Team',
  'explanation' => 'The Crisis Negotiation Team uses dialogue strategies to resolve hostage situations safely.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 3
$batch[] = [
  'subject_id'  => 25,
  'part'        => 5,
  'question'    => 'What plan outlines strategic responses to a riot in a correctional facility?',
  'choices'     => json_encode([
    'Riot Control Plan',
    'Classification Plan',
    'Visitation Plan',
    'Intake Plan',
  ]),
  'answer'      => 'Riot Control Plan',
  'explanation' => 'A Riot Control Plan details tactics, roles, and equipment to manage inmate disturbances.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 4
$batch[] = [
  'subject_id'  => 25,
  'part'        => 5,
  'question'    => 'Which chemical agent is commonly used for non‑lethal riot control?',
  'choices'     => json_encode([
    'Lethal gas',
    'Tear gas',
    'Mustard gas',
    'Carbon monoxide',
  ]),
  'answer'      => 'Tear gas',
  'explanation' => 'Tear gas disperses crowds by causing eye and respiratory irritation without lasting harm.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 5
$batch[] = [
  'subject_id'  => 25,
  'part'        => 5,
  'question'    => 'In correctional administration, what is defined as any unauthorized item in inmates’ possession?',
  'choices'     => json_encode([
    'Permissible property',
    'Contraband',
    'Authorized goods',
    'Clean property',
  ]),
  'answer'      => 'Contraband',
  'explanation' => 'Contraband refers to any item not allowed within the facility, posing security risks.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 6
$batch[] = [
  'subject_id'  => 25,
  'part'        => 5,
  'question'    => 'Which of the following is considered major contraband in prisons?',
  'choices'     => json_encode([
    'Toothpaste',
    'Sharp objects',
    'Stationery',
    'Spare clothing',
  ]),
  'answer'      => 'Sharp objects',
  'explanation' => 'Sharp objects can be used as weapons and are strictly prohibited.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 7
$batch[] = [
  'subject_id'  => 25,
  'part'        => 5,
  'question'    => 'Emergency evacuation drills should be conducted at least:',
  'choices'     => json_encode([
    'Monthly',
    'Quarterly',
    'Annually',
    'Only upon request',
  ]),
  'answer'      => 'Quarterly',
  'explanation' => 'Quarterly drills ensure staff and inmates are familiar with evacuation procedures.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 8
$batch[] = [
  'subject_id'  => 25,
  'part'        => 5,
  'question'    => 'Which document prescribes procedures for fire emergencies in jails?',
  'choices'     => json_encode([
    'Fire Safety Plan',
    'Health Manual',
    'Training Guide',
    'Inmate Handbook',
  ]),
  'answer'      => 'Fire Safety Plan',
  'explanation' => 'A Fire Safety Plan outlines evacuation routes, alarms, and staff responsibilities.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 9
$batch[] = [
  'subject_id'  => 25,
  'part'        => 5,
  'question'    => 'Which class of fire extinguisher is suitable for electrical fires?',
  'choices'     => json_encode([
    'Class A',
    'Class B',
    'Class C',
    'Class D',
  ]),
  'answer'      => 'Class C',
  'explanation' => 'Class C extinguishers are designed to put out fires involving electrical equipment safely.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 10
$batch[] = [
  'subject_id'  => 25,
  'part'        => 5,
  'question'    => 'In case of suspected inmate poisoning, which department is alerted first?',
  'choices'     => json_encode([
    'Security Office',
    'Medical Unit',
    'Visitation Office',
    'Administration Office',
  ]),
  'answer'      => 'Medical Unit',
  'explanation' => 'The Medical Unit assesses and treats potential poisoning incidents immediately.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 11
$batch[] = [
  'subject_id'  => 25,
  'part'        => 5,
  'question'    => 'What is the primary purpose of a facility lockdown during an incident?',
  'choices'     => json_encode([
    'Facilitate movement',
    'Restrict inmate movement',
    'Allow visitors entry',
    'Conduct headcount',
  ]),
  'answer'      => 'Restrict inmate movement',
  'explanation' => 'Lockdown secures inmates in place to prevent escalation and ensure safety.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 12
$batch[] = [
  'subject_id'  => 25,
  'part'        => 5,
  'question'    => 'Who has authority to order a facility‑wide lockdown?',
  'choices'     => json_encode([
    'Correctional Officer I',
    'Warden',
    'Visiting Judge',
    'Probation Officer',
  ]),
  'answer'      => 'Warden',
  'explanation' => 'The Warden issues a lockdown order during security threats or emergencies.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 13
$batch[] = [
  'subject_id'  => 25,
  'part'        => 5,
  'question'    => 'During emergencies, headcounts are conducted to:',
  'choices'     => json_encode([
    'Update schedules',
    'Verify inmate accountability',
    'Assign cells',
    'Schedule visits',
  ]),
  'answer'      => 'Verify inmate accountability',
  'explanation' => 'Headcounts confirm all inmates are present and unharmed during crises.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 14
$batch[] = [
  'subject_id'  => 25,
  'part'        => 5,
  'question'    => 'Which system ensures continuous communication among staff during a crisis?',
  'choices'     => json_encode([
    'PA system',
    'CCTV',
    'Inmate phone',
    'Kiosk terminal',
  ]),
  'answer'      => 'PA system',
  'explanation' => 'The PA system broadcasts real‑time instructions to staff and inmates.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 15
$batch[] = [
  'subject_id'  => 25,
  'part'        => 5,
  'question'    => 'What is the fastest method to request reinforcement during an inmate disturbance?',
  'choices'     => json_encode([
    'Email',
    'Radio call',
    'Written memo',
    'Phone booking',
  ]),
  'answer'      => 'Radio call',
  'explanation' => 'Radio calls provide instant, hands‑free communication for urgent support.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 16
$batch[] = [
  'subject_id'  => 25,
  'part'        => 5,
  'question'    => 'Post‑incident debriefings are conducted by which unit?',
  'choices'     => json_encode([
    'Disciplinary Committee',
    'Crisis Management Team',
    'Maintenance Staff',
    'Volunteer Group',
  ]),
  'answer'      => 'Crisis Management Team',
  'explanation' => 'The Crisis Management Team reviews actions and outcomes to improve protocols.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 17
$batch[] = [
  'subject_id'  => 25,
  'part'        => 5,
  'question'    => 'The maximum response time standard for the Emergency Response Unit is:',
  'choices'     => json_encode([
    '1 minute',
    '5 minutes',
    '15 minutes',
    '30 minutes',
  ]),
  'answer'      => '5 minutes',
  'explanation' => 'A 5‑minute response time ensures rapid intervention during critical incidents.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 18
$batch[] = [
  'subject_id'  => 25,
  'part'        => 5,
  'question'    => 'Which procedure is followed to preserve evidence after a riot?',
  'choices'     => json_encode([
    'Immediate cleanup',
    'Evidence logbook entry',
    'Visitor removal',
    'Cell search',
  ]),
  'answer'      => 'Evidence logbook entry',
  'explanation' => 'Recording evidence details in the logbook maintains chain of custody.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 19
$batch[] = [
  'subject_id'  => 25,
  'part'        => 5,
  'question'    => 'A disturbance involving refusal to work is known as a:',
  'choices'     => json_encode([
    'Riot',
    'Mutiny',
    'Work stoppage',
    'Hunger strike',
  ]),
  'answer'      => 'Work stoppage',
  'explanation' => 'A work stoppage is a non‑violent protest where inmates refuse work assignments.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 20
$batch[] = [
  'subject_id'  => 25,
  'part'        => 5,
  'question'    => 'Which team coordinates search and rescue operations during natural calamities in the facility?',
  'choices'     => json_encode([
    'Fire Brigade Team',
    'Medical Unit',
    'Search and Rescue Team',
    'Culinary Staff',
  ]),
  'answer'      => 'Search and Rescue Team',
  'explanation' => 'The Search and Rescue Team conducts evacuation and rescue in calamity situations.',
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
            $this->command->warn("Part 5 has only {$batchCount} questions. Minimum 20 required.");
        }

        // 3) Abort seeding if duplicates found or insufficient items
        if (!empty($dupes) || $batchCount < 20) {
            $this->command->info("Seeding aborted for part 5. Please resolve duplicates or add more questions.");
            return;
        }

        // 4) Insert all questions if checks pass
        DB::table('questions')->insert($batch);
        $this->command->info("{$batchCount} question(s) seeded for part 5.");
    }
}
