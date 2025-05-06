<?php

namespace Database\Seeders\CLE\CrimeDetectionInvestigationPrevention;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class CrimeDetectionInvestigationPreventionPart5Seeder extends Seeder
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

//1
$batch[] = [
    'subject_id'  => 23,
    'part'        => 5,
    'question'    => 'What are the four components of the fire tetrahedron?',
    'choices'     => json_encode([
        'Heat, fuel, oxygen, chemical chain reaction',
        'Heat, fuel, oxygen, spark',
        'Heat, fuel, ignition source, oxygen',
        'Fuel, oxygen, smoke, heat',
    ]),
    'answer'      => 'Heat, fuel, oxygen, chemical chain reaction',
    'explanation' => 'The tetrahedron builds on the fire triangle by adding the chemical chain reaction necessary for fire propagation.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//2
$batch[] = [
    'subject_id'  => 23,
    'part'        => 5,
    'question'    => 'Which class of fire involves combustible metals such as magnesium and sodium?',
    'choices'     => json_encode([
        'Class D',
        'Class A',
        'Class B',
        'Class C',
    ]),
    'answer'      => 'Class D',
    'explanation' => 'Class D fires involve combustible metals which require special dry powder extinguishers.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//3
$batch[] = [
    'subject_id'  => 23,
    'part'        => 5,
    'question'    => 'Under PD 1613, what constitutes arson in the Philippines?',
    'choices'     => json_encode([
        'Willful or malicious burning of property',
        'Negligent use of fire',
        'Accidental combustion',
        'Prescribed controlled burning',
    ]),
    'answer'      => 'Willful or malicious burning of property',
    'explanation' => 'PD 1613 defines arson as the criminal act of intentionally burning property.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//4
$batch[] = [
    'subject_id'  => 23,
    'part'        => 5,
    'question'    => 'Which tool is most suitable for detecting hidden fires behind walls and ceilings?',
    'choices'     => json_encode([
        'Thermal imaging camera',
        'Moisture meter',
        'Gas detector',
        'Smoke pellet tester',
    ]),
    'answer'      => 'Thermal imaging camera',
    'explanation' => 'Thermal imaging detects heat signatures indicative of hidden fire spread.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//5
$batch[] = [
    'subject_id'  => 23,
    'part'        => 5,
    'question'    => 'What is the primary purpose of a smoke detector in fire protection?',
    'choices'     => json_encode([
        'To provide early warning of fire',
        'To suppress flames automatically',
        'To extinguish the fire',
        'To measure temperature rise',
    ]),
    'answer'      => 'To provide early warning of fire',
    'explanation' => 'Smoke detectors sense smoke particles to alert occupants before flames become widespread.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//6
$batch[] = [
    'subject_id'  => 23,
    'part'        => 5,
    'question'    => 'Which fire extinguisher type is appropriate for electrical fires?',
    'choices'     => json_encode([
        'CO2 extinguisher',
        'Water extinguisher',
        'Foam extinguisher',
        'Dry chemical powder extinguisher',
    ]),
    'answer'      => 'CO2 extinguisher',
    'explanation' => 'CO2 extinguishers displace oxygen without conducting electricity, suitable for Class C fires.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//7
$batch[] = [
    'subject_id'  => 23,
    'part'        => 5,
    'question'    => 'Which phenomenon describes the upward movement of heated smoke and gases in a confined space?',
    'choices'     => json_encode([
        'Thermal layering',
        'Backdraft',
        'Flashover',
        'Smoke inversion',
    ]),
    'answer'      => 'Thermal layering',
    'explanation' => 'Thermal layering causes hot gases to accumulate at ceiling level, forming distinct heat layers.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//8
$batch[] = [
    'subject_id'  => 23,
    'part'        => 5,
    'question'    => 'What indicates a potential accelerant use at an arson scene?',
    'choices'     => json_encode([
        'Irregular burn patterns',
        'Uniform charring',
        'Ash accumulation only',
        'Slow burn progression',
    ]),
    'answer'      => 'Irregular burn patterns',
    'explanation' => 'Accelerants cause rapid spreading and unusual burn patterns, such as pour lines.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//9
$batch[] = [
    'subject_id'  => 23,
    'part'        => 5,
    'question'    => 'Which device detects the presence of heat by expanding a fusible link?',
    'choices'     => json_encode([
        'Heat detector',
        'Smoke detector',
        'Flame detector',
        'Gas detector',
    ]),
    'answer'      => 'Heat detector',
    'explanation' => 'Heat detectors activate alarms when a preset temperature threshold is reached.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//10
$batch[] = [
    'subject_id'  => 23,
    'part'        => 5,
    'question'    => 'In arson investigation, which sample is collected to test for accelerant residue?',
    'choices'     => json_encode([
        'Charred debris',
        'Fresh wood',
        'Vehicle upholstery',
        'Unburned metal',
    ]),
    'answer'      => 'Charred debris',
    'explanation' => 'Investigators collect charred materials to analyze volatile residues of accelerants.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//11
$batch[] = [
    'subject_id'  => 23,
    'part'        => 5,
    'question'    => 'Which condition is necessary for flashover to occur in a compartment fire?',
    'choices'     => json_encode([
        'Sufficient heat accumulation',
        'Continuous ventilation',
        'High humidity',
        'Presence of smoke detector',
    ]),
    'answer'      => 'Sufficient heat accumulation',
    'explanation' => 'Flashover happens when all combustible surfaces reach ignition temperature simultaneously.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//12
$batch[] = [
    'subject_id'  => 23,
    'part'        => 5,
    'question'    => 'Under PD 1613, what is the penalty for first-degree arson?',
    'choices'     => json_encode([
        'Reclusion perpetua',
        'Life imprisonment',
        'Death penalty',
        'Perpetual absolute disqualification',
    ]),
    'answer'      => 'Reclusion perpetua',
    'explanation' => 'First-degree arson under PD 1613 is punishable by reclusion perpetua.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//13
$batch[] = [
    'subject_id'  => 23,
    'part'        => 5,
    'question'    => 'Which test uses a chemical swab to preliminarily detect petroleum-based accelerants?',
    'choices'     => json_encode([
        'Drager tube test',
        'Ninhydrin test',
        'Schaffer reagent',
        'Lucigenin test',
    ]),
    'answer'      => 'Drager tube test',
    'explanation' => 'Drager tubes with reagents react with hydrocarbons indicating accelerant presence.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//14
$batch[] = [
    'subject_id'  => 23,
    'part'        => 5,
    'question'    => 'Which pattern on the floor of a fire scene suggests a liquid accelerant was poured?',
    'choices'     => json_encode([
        'Pour pattern',
        'V-pattern',
        'Boil pattern',
        'Alligatoring',
    ]),
    'answer'      => 'Pour pattern',
    'explanation' => 'Pour patterns are irregular burn marks where accelerant was applied.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//15
$batch[] = [
    'subject_id'  => 23,
    'part'        => 5,
    'question'    => 'Which fire behavior phenomenon occurs when oxygen is suddenly introduced to a smoldering enclosure?',
    'choices'     => json_encode([
        'Backdraft',
        'Flashover',
        'Rollover',
        'Thermal layering',
    ]),
    'answer'      => 'Backdraft',
    'explanation' => 'Backdraft happens when fresh air ignites superheated gases in a confined space.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//16
$batch[] = [
    'subject_id'  => 23,
    'part'        => 5,
    'question'    => 'What documentation must investigators maintain to preserve fire scene evidence integrity?',
    'choices'     => json_encode([
        'Chain of custody log',
        'Vehicle logbook',
        'Personnel roster',
        'Budget report',
    ]),
    'answer'      => 'Chain of custody log',
    'explanation' => 'A chain of custody log records each transfer of evidence from the scene to the lab.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//17
$batch[] = [
    'subject_id'  => 23,
    'part'        => 5,
    'question'    => 'Which device automatically releases water when ambient temperature exceeds a set point?',
    'choices'     => json_encode([
        'Automatic sprinkler head',
        'Heat detector',
        'Smoke damper',
        'Pressure gauge',
    ]),
    'answer'      => 'Automatic sprinkler head',
    'explanation' => 'Sprinkler heads activate at high temperatures to discharge water over fire.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//18
$batch[] = [
    'subject_id'  => 23,
    'part'        => 5,
    'question'    => 'What is the primary goal of origin and cause analysis in arson investigation?',
    'choices'     => json_encode([
        'Determine where and how the fire started',
        'Extinguish remaining flames',
        'Assess structural damage',
        'Measure smoke plume height',
    ]),
    'answer'      => 'Determine where and how the fire started',
    'explanation' => 'Establishing the origin and cause is critical to differentiate accidental from incendiary fires.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//19
$batch[] = [
    'subject_id'  => 23,
    'part'        => 5,
    'question'    => 'Which indicator suggests an electrical fire origin in a building?',
    'choices'     => json_encode([
        'Charring at electrical outlets',
        'Broken window glass',
        'Wet floor pattern',
        'Burn patterns on ceiling only',
    ]),
    'answer'      => 'Charring at electrical outlets',
    'explanation' => 'Localized charring or melting near wiring indicates electrical failure as origin.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//20
$batch[] = [
    'subject_id'  => 23,
    'part'        => 5,
    'question'    => 'Which safety principle requires wearing protective equipment during fire scene investigation?',
    'choices'     => json_encode([
        'Personal protective equipment (PPE) protocol',
        'Chain of custody principle',
        'Promptness principle',
        'Presumption of innocence',
    ]),
    'answer'      => 'Personal protective equipment (PPE) protocol',
    'explanation' => 'PPE protocol ensures investigator safety from heat, smoke, and hazardous materials.',
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
