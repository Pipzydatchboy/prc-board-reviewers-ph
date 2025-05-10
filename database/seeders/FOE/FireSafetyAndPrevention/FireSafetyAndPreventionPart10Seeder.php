<?php

namespace Database\Seeders\FOE\FireSafetyAndPrevention;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class FireSafetyAndPreventionPart10Seeder extends Seeder
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

$batch = [
    //1
    [
        'subject_id'  => 43,
        'part'        => 10,
        'question'    => 'Which system must provide two-way communication between building occupants and the fire command center?',
        'choices'     => json_encode([
            'Firefighters’ telephone system',
            'Public address system',
            'Elevator intercom',
            'Security office phone',
        ]),
        'answer'      => 'Firefighters’ telephone system',
        'explanation' => 'NFPA requires dedicated firefighter phones in stairways and lobby communicating with command center.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //2
    [
        'subject_id'  => 43,
        'part'        => 10,
        'question'    => 'What is the required inspection interval for kitchen hood suppression nozzles?',
        'choices'     => json_encode([
            'Monthly',
            'Quarterly',
            'Annually',
            'Bi-annually',
        ]),
        'answer'      => 'Quarterly',
        'explanation' => 'NFPA 96 mandates quarterly inspection/cleaning of hood suppression components to ensure readiness.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //3
    [
        'subject_id'  => 43,
        'part'        => 10,
        'question'    => 'Which feature is required on exit access stair lighting?',
        'choices'     => json_encode([
            'Battery-backed lighting',
            'Daylight only',
            'Motion-activated only',
            'None required',
        ]),
        'answer'      => 'Battery-backed lighting',
        'explanation' => 'Emergency lighting on egress paths must be battery-backed to remain lit during power failure.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //4
    [
        'subject_id'  => 43,
        'part'        => 10,
        'question'    => 'Which device must be tested semi-annually to verify correct actuation temperature?',
        'choices'     => json_encode([
            'Heat detectors',
            'Smoke detectors',
            'Flow switches',
            'Tamper switches',
        ]),
        'answer'      => 'Heat detectors',
        'explanation' => 'Heat detectors require semi-annual testing of activation temperature per NFPA standards.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //5
    [
        'subject_id'  => 43,
        'part'        => 10,
        'question'    => 'Which component must be locked and tagged to prevent unauthorized shutoff of sprinkler systems?',
        'choices'     => json_encode([
            'Control valves',
            'Fire pump panel',
            'Smoke dampers',
            'Exit doors',
        ]),
        'answer'      => 'Control valves',
        'explanation' => 'Control valves must be secured in the open position with locks and tags to ensure system availability.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //6
    [
        'subject_id'  => 43,
        'part'        => 10,
        'question'    => 'What is the maximum allowable rating for nonrated doors in a fire barrier?',
        'choices'     => json_encode([
            '20 minutes',
            '30 minutes',
            '45 minutes',
            '60 minutes',
        ]),
        'answer'      => '20 minutes',
        'explanation' => 'Nonrated doors in fire barriers are limited to a 20-minute rating under most codes.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //7
    [
        'subject_id'  => 43,
        'part'        => 10,
        'question'    => 'Which record must list the date and contractor of each sprinkler system inspection?',
        'choices'     => json_encode([
            'Inspection report',
            'Evacuation drill log',
            'Training record',
            'Incident report',
        ]),
        'answer'      => 'Inspection report',
        'explanation' => 'Inspection reports document dates, findings, and inspector/contractor for accountability.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //8
    [
        'subject_id'  => 43,
        'part'        => 10,
        'question'    => 'Which hazard control is most effective for preventing fires from static in flammable liquid transfer?',
        'choices'     => json_encode([
            'Bonding and grounding',
            'Using non-sparking tools',
            'Wearing insulated gloves',
            'Posting no-smoking signs',
        ]),
        'answer'      => 'Bonding and grounding',
        'explanation' => 'Bonding and grounding prevent charge buildup and ignition during liquid transfer operations.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //9
    [
        'subject_id'  => 43,
        'part'        => 10,
        'question'    => 'What is the required minimum clearance for fire lanes?',
        'choices'     => json_encode([
            '20 feet',
            '10 feet',
            '5 feet',
            '15 feet',
        ]),
        'answer'      => '20 feet',
        'explanation' => 'Fire lanes must be a minimum of 20 ft wide unobstructed to accommodate emergency vehicles.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //10
    [
        'subject_id'  => 43,
        'part'        => 10,
        'question'    => 'Which device must sound locally upon activation of a sprinkler system?',
        'choices'     => json_encode([
            'Alarm bell',
            'Smoke detector',
            'Door hold-open',
            'Flow meter',
        ]),
        'answer'      => 'Alarm bell',
        'explanation' => 'Local alarm bells provide immediate audible notification when sprinklers flow.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //11
    [
        'subject_id'  => 43,
        'part'        => 10,
        'question'    => 'Which exit component must be monitored for tampering?',
        'choices'     => json_encode([
            'Fire doors',
            'Emergency lights',
            'Sprinkler heads',
            'Smoke vents',
        ]),
        'answer'      => 'Fire doors',
        'explanation' => 'Tamper switches or inspections verify that fire doors remain closed and functional.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //12
    [
        'subject_id'  => 43,
        'part'        => 10,
        'question'    => 'Which maintenance practice most prolongs the life of a fire pump?',
        'choices'     => json_encode([
            'Weekly churn test',
            'Daily visual check',
            'Monthly lubrication',
            'Annual overhaul only',
        ]),
        'answer'      => 'Weekly churn test',
        'explanation' => 'Weekly churn tests exercise the pump and detect performance issues early to prevent damage.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //13
    [
        'subject_id'  => 43,
        'part'        => 10,
        'question'    => 'Which fire safety feature must be provided in elevator machine rooms?',
        'choices'     => json_encode([
            'Smoke detector',
            'Exit sign',
            'Strobe light',
            'Hose valve',
        ]),
        'answer'      => 'Smoke detector',
        'explanation' => 'Elevator machine rooms require smoke detection to shut down elevators and alert occupants.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //14
    [
        'subject_id'  => 43,
        'part'        => 10,
        'question'    => 'Which procedure must follow a failed annual fire door inspection?',
        'choices'     => json_encode([
            'Repair immediately',
            'Re-inspect next quarter',
            'Document and ignore',
            'Replace exit signs',
        ]),
        'answer'      => 'Repair immediately',
        'explanation' => 'Any defects compromising door performance must be corrected without delay.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //15
    [
        'subject_id'  => 43,
        'part'        => 10,
        'question'    => 'What is the maximum temperature rating for heat detectors in cooking areas?',
        'choices'     => json_encode([
            '200°F',
            '135°F',
            '300°F',
            '450°F',
        ]),
        'answer'      => '200°F',
        'explanation' => 'Heat detectors in kitchens must withstand ambient cooking temperatures; 200°F is typical rating.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //16
    [
        'subject_id'  => 43,
        'part'        => 10,
        'question'    => 'Which system component must be inspected for corrosion annually?',
        'choices'     => json_encode([
            'Underground fire mains',
            'Exit doors',
            'Smoke detectors',
            'Alarm panels',
        ]),
        'answer'      => 'Underground fire mains',
        'explanation' => 'NFPA 25 requires annual internal/external inspection to prevent failure of underground mains.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //17
    [
        'subject_id'  => 43,
        'part'        => 10,
        'question'    => 'Which preventive action reduces false alarms in voice evacuation systems?',
        'choices'     => json_encode([
            'Regular microphone checks',
            'Disable speakers',
            'Cover strobes',
            'Limit announcements',
        ]),
        'answer'      => 'Regular microphone checks',
        'explanation' => 'Testing microphones ensures clear communication and prevents malfunctions triggering false alarms.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //18
    [
        'subject_id'  => 43,
        'part'        => 10,
        'question'    => 'Which record must show the date and time of every fire drill?',
        'choices'     => json_encode([
            'Fire drill log',
            'Inspection report',
            'Maintenance record',
            'Incident report',
        ]),
        'answer'      => 'Fire drill log',
        'explanation' => 'Drill logs document when drills occur to verify compliance with frequency requirements.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //19
    [
        'subject_id'  => 43,
        'part'        => 10,
        'question'    => 'Which component must be tested for proper operation during annual waterflow tests?',
        'choices'     => json_encode([
            'Alarm valve',
            'Smoke damper',
            'Door closer',
            'Exit sign',
        ]),
        'answer'      => 'Alarm valve',
        'explanation' => 'The alarm (clapper) valve must be tested to ensure it activates on waterflow and sounds alarms.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //20
    [
        'subject_id'  => 43,
        'part'        => 10,
        'question'    => 'Which safety practice reduces fire risk when using portable generators indoors?',
        'choices'     => json_encode([
            'Ensure proper ventilation to exhaust fumes',
            'Operate next to combustibles',
            'Cover with blankets',
            'Place in stairwell',
        ]),
        'answer'      => 'Ensure proper ventilation to exhaust fumes',
        'explanation' => 'Portable generators indoors require adequate ventilation to prevent heat buildup and ignition of fumes.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
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
