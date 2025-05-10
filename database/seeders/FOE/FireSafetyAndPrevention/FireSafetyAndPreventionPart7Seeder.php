<?php

namespace Database\Seeders\FOE\FireSafetyAndPrevention;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class FireSafetyAndPreventionPart7Seeder extends Seeder
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
        'part'        => 7,
        'question'    => 'Which device must be provided in all mechanical equipment rooms to detect smoke early?',
        'choices'     => json_encode([
            'Photoelectric smoke detector',
            'Heat detector',
            'Carbon monoxide detector',
            'Manual pull station',
        ]),
        'answer'      => 'Photoelectric smoke detector',
        'explanation' => 'Photoelectric detectors respond rapidly to smoldering fires common in machinery areas.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //2
    [
        'subject_id'  => 43,
        'part'        => 7,
        'question'    => 'What minimum rating is required for exit access corridors in business occupancies?',
        'choices'     => json_encode([
            '1-hour fire-resistance',
            '2-hour fire-resistance',
            '20-minute fire-resistance',
            '30-minute fire-resistance',
        ]),
        'answer'      => '1-hour fire-resistance',
        'explanation' => 'Business corridors often require 1-hour rated construction to protect egress paths.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //3
    [
        'subject_id'  => 43,
        'part'        => 7,
        'question'    => 'Which measure reduces fire spread through service penetrations in fire barriers?',
        'choices'     => json_encode([
            'Firestop sealants',
            'Open sleeve sleeves',
            'Loose packing',
            'Unsealed conduit',
        ]),
        'answer'      => 'Firestop sealants',
        'explanation' => 'Firestop materials seal gaps around penetrations to maintain barrier integrity under fire.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //4
    [
        'subject_id'  => 43,
        'part'        => 7,
        'question'    => 'Which frequency is REQUIRED for full-flow testing of standpipe systems?',
        'choices'     => json_encode([
            'Every 5 years',
            'Annually',
            'Monthly',
            'Semi-annually',
        ]),
        'answer'      => 'Every 5 years',
        'explanation' => 'NFPA 25 requires full-flow standpipe tests at 5-year intervals to confirm capacity.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //5
    [
        'subject_id'  => 43,
        'part'        => 7,
        'question'    => 'Which feature is MANDATORY on exit discharge gates in parking garages?',
        'choices'     => json_encode([
            'Self-closing hardware',
            'Magnetic hold-open',
            'Double cylinder deadbolt',
            'Keyed lock',
        ]),
        'answer'      => 'Self-closing hardware',
        'explanation' => 'Self-closing ensures gates remain closed to protect exit paths from fire spread.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //6
    [
        'subject_id'  => 43,
        'part'        => 7,
        'question'    => 'Which class of fire is mitigated by installing fire-rated glazing in atrium enclosures?',
        'choices'     => json_encode([
            'Class A',
            'Class B',
            'Class C',
            'Class D',
        ]),
        'answer'      => 'Class A',
        'explanation' => 'Fire-rated glazing contains flame and smoke, limiting Class A fires in open spaces.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //7
    [
        'subject_id'  => 43,
        'part'        => 7,
        'question'    => 'What is the REQUIRED minimum exit width per occupant load factor for a dormitory?',
        'choices'     => json_encode([
            '0.2 in. per occupant',
            '0.1 in. per occupant',
            '0.15 in. per occupant',
            '0.05 in. per occupant',
        ]),
        'answer'      => '0.2 in. per occupant',
        'explanation' => 'Codes assign 0.2″ exit width per occupant for residential-type occupancies like dorms.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //8
    [
        'subject_id'  => 43,
        'part'        => 7,
        'question'    => 'Which preventive device must be installed on ventilation fans serving parking garages?',
        'choices'     => json_encode([
            'Smoke detector interlock',
            'Heat detector',
            'Manual pull station',
            'Photoelectric sensor',
        ]),
        'answer'      => 'Smoke detector interlock',
        'explanation' => 'Smoke detectors automatically start garage fans to clear smoke during fire events.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //9
    [
        'subject_id'  => 43,
        'part'        => 7,
        'question'    => 'Which clearance must be maintained between portable heaters and combustibles?',
        'choices'     => json_encode([
            '3 feet',
            '1 foot',
            '6 inches',
            'No requirement',
        ]),
        'answer'      => '3 feet',
        'explanation' => 'A 3′ safety zone around portable heaters minimizes ignition risk of nearby materials.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //10
    [
        'subject_id'  => 43,
        'part'        => 7,
        'question'    => 'Which document sets the procedure for fire and evacuation drills in hospitals?',
        'choices'     => json_encode([
            'Life Safety Code (NFPA 101)',
            'NFPA 10',
            'NFPA 13',
            'NFPA 80',
        ]),
        'answer'      => 'Life Safety Code (NFPA 101)',
        'explanation' => 'NFPA 101 prescribes hospital drill frequency and documentation requirements for patient safety.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //11
    [
        'subject_id'  => 43,
        'part'        => 7,
        'question'    => 'Which type of firestop is preferred for flexible duct penetrations?',
        'choices'     => json_encode([
            'Intumescent wrap strip',
            'Rigid block',
            'Concrete grout',
            'Loose mineral wool',
        ]),
        'answer'      => 'Intumescent wrap strip',
        'explanation' => 'Wrap strips expand under heat to seal duct openings and maintain barrier rating.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //12
    [
        'subject_id'  => 43,
        'part'        => 7,
        'question'    => 'What is the MAXIMUM allowable length of a dead-end corridor in a business occupancy?',
        'choices'     => json_encode([
            '20 feet',
            '50 feet',
            '75 feet',
            '100 feet',
        ]),
        'answer'      => '20 feet',
        'explanation' => 'Dead-ends over 20′ pose egress hazards and are limited by code in business occupancies.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //13
    [
        'subject_id'  => 43,
        'part'        => 7,
        'question'    => 'Which preventive measure addresses fire spread in cable trays?',
        'choices'     => json_encode([
            'Install fire-resistant covers',
            'Leave trays open',
            'Pack with insulation',
            'Allow mixed-combustible cables',
        ]),
        'answer'      => 'Install fire-resistant covers',
        'explanation' => 'Covers impede flame spread along cable runs in tray installations.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //14
    [
        'subject_id'  => 43,
        'part'        => 7,
        'question'    => 'Which inspection finds obstructions in fire department connections?',
        'choices'     => json_encode([
            'Visual inspection and test',
            'Smoke test',
            'Flow test',
            'Heat test',
        ]),
        'answer'      => 'Visual inspection and test',
        'explanation' => 'Inspectors check FDC caps and connections visually, then apply a brief flow to verify function.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //15
    [
        'subject_id'  => 43,
        'part'        => 7,
        'question'    => 'Which component of fire alarm systems requires annual sensitivity testing?',
        'choices'     => json_encode([
            'Smoke detectors',
            'Horn/strobes',
            'Initiating devices',
            'Control panel',
        ]),
        'answer'      => 'Smoke detectors',
        'explanation' => 'Detectors must be tested for sensitivity drift to ensure early warning performance.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //16
    [
        'subject_id'  => 43,
        'part'        => 7,
        'question'    => 'Which action must follow discovery of graffiti on fire doors?',
        'choices'     => json_encode([
            'Remove immediately and inspect door function',
            'Ignore until next inspection',
            'Repaint quarterly',
            'Apply protective coating',
        ]),
        'answer'      => 'Remove immediately and inspect door function',
        'explanation' => 'Defacement may hide damage; cleaning and checking operation preserves door integrity.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //17
    [
        'subject_id'  => 43,
        'part'        => 7,
        'question'    => 'Which clearance must be maintained between storage and the ceiling in a sprinklered warehouse?',
        'choices'     => json_encode([
            '18 inches',
            '12 inches',
            '24 inches',
            '36 inches',
        ]),
        'answer'      => '18 inches',
        'explanation' => 'An 18″ clearance below sprinklers ensures effective spray distribution in storage areas.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //18
    [
        'subject_id'  => 43,
        'part'        => 7,
        'question'    => 'Which device prevents unauthorized closing of fire doors on hold-open devices?',
        'choices'     => json_encode([
            'Alarmed hold-open device',
            'Magnetic lock',
            'Hydraulic closer',
            'Chain link',
        ]),
        'answer'      => 'Alarmed hold-open device',
        'explanation' => 'These devices sound an alarm if doors are improperly held open, maintaining fire separation.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //19
    [
        'subject_id'  => 43,
        'part'        => 7,
        'question'    => 'Which code section governs combustible waste storage inside buildings?',
        'choices'     => json_encode([
            'NFPA 1',
            'NFPA 30',
            'NFPA 101',
            'NFPA 13',
        ]),
        'answer'      => 'NFPA 1',
        'explanation' => 'Fire Code addresses housekeeping and waste storage requirements for occupant safety.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //20
    [
        'subject_id'  => 43,
        'part'        => 7,
        'question'    => 'Which record must list the date of the next required hydrant flow test?',
        'choices'     => json_encode([
            'Hydrant flow test report',
            'Fire drill log',
            'Plan review file',
            'Inspection checklist',
        ]),
        'answer'      => 'Hydrant flow test report',
        'explanation' => 'Reports record current results and schedule the next test per jurisdictional standards.',
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
