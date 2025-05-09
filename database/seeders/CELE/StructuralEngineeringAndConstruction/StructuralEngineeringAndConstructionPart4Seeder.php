<?php

namespace Database\Seeders\CELE\StructuralEngineeringAndConstruction;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class StructuralEngineeringAndConstructionPart4Seeder extends Seeder
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
        'subject_id'  => 40,
        'part'        => 4,
        'question'    => 'According to NSCP, the design shear strength of reinforced concrete, ϕV_c, is calculated as:',
        'choices'     => json_encode([
            '0.17√f\'c·b·d',
            '0.25√f\'c·b·d',
            '0.15√f\'c·b·d',
            '0.20√f\'c·b·d',
        ]),
        'answer'      => '0.17√f\'c·b·d',
        'explanation' => 'NSCP specifies ϕV_c = 0.17√f\'c·b·d for shear in members without shear reinforcement.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //2
    [
        'subject_id'  => 40,
        'part'        => 4,
        'question'    => 'The serviceability limit for crack width in reinforced concrete under environment exposure is typically limited to:',
        'choices'     => json_encode([
            '0.3 mm',
            '0.2 mm',
            '0.4 mm',
            '0.5 mm',
        ]),
        'answer'      => '0.3 mm',
        'explanation' => 'Service crack control limits width to 0.2–0.3 mm for durability and aesthetics per NSCP.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //3
    [
        'subject_id'  => 40,
        'part'        => 4,
        'question'    => 'In composite steel–concrete beams, shear studs are provided to:',
        'choices'     => json_encode([
            'Transfer shear between steel beam and slab',
            'Increase torsional resistance',
            'Control deflection',
            'Improve fire resistance',
        ]),
        'answer'      => 'Transfer shear between steel beam and slab',
        'explanation' => 'Shear studs ensure composite action by transferring interface shear.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //4
    [
        'subject_id'  => 40,
        'part'        => 4,
        'question'    => 'Which formwork type is best for continuous casting of concrete tunnels?',
        'choices'     => json_encode([
            'Slip formwork',
            'Modular steel formwork',
            'Timber formwork',
            'Jump formwork',
        ]),
        'answer'      => 'Slip formwork',
        'explanation' => 'Slip form moves continuously, ideal for tunnels and tall structures.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //5
    [
        'subject_id'  => 40,
        'part'        => 4,
        'question'    => 'The development length of deformed bars, l_d, increases when:',
        'choices'     => json_encode([
            'Concrete strength increases',
            'Bar diameter increases',
            'Yield strength decreases',
            'Bond conditions improve',
        ]),
        'answer'      => 'Bar diameter increases',
        'explanation' => 'l_d ∝ φ, so larger bar diameter requires longer embedment for adequate bond.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //6
    [
        'subject_id'  => 40,
        'part'        => 4,
        'question'    => 'Which method is used to calculate torsional strength of rectangular reinforced concrete sections?',
        'choices'     => json_encode([
            'Space truss analogy',
            'Elastic theory',
            'Strut-and-tie model',
            'Bredt’s formula',
        ]),
        'answer'      => 'Space truss analogy',
        'explanation' => 'Space truss models distribute shear and longitudinal bars to resist torsion.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //7
    [
        'subject_id'  => 40,
        'part'        => 4,
        'question'    => 'In reinforced masonry, head joints should be filled solidly when:',
        'choices'     => json_encode([
            'Vertical reinforcement is present',
            'No lateral reinforcement',
            'Lintels are installed',
            'Openings exist',
        ]),
        'answer'      => 'Vertical reinforcement is present',
        'explanation' => 'Solid head joints bond with vertical bars to develop full reinforcement strength.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //8
    [
        'subject_id'  => 40,
        'part'        => 4,
        'question'    => 'Which temporary load should be considered on formwork for deep beams?',
        'choices'     => json_encode([
            'Concentrated load of equipment',
            'Lateral earth pressure',
            'Impact load from concrete placement',
            'All of the above',
        ]),
        'answer'      => 'All of the above',
        'explanation' => 'Deep beam formwork must resist equipment loads, earth pressure, and impact during placing.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //9
    [
        'subject_id'  => 40,
        'part'        => 4,
        'question'    => 'Which steel connection type provides highest rotational stiffness?',
        'choices'     => json_encode([
            'Fully welded moment connection',
            'Bolted shear connection',
            'Pinned end plate',
            'Slip-critical joint',
        ]),
        'answer'      => 'Fully welded moment connection',
        'explanation' => 'Continuous welds on flanges and web create rigid moment connections.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //10
    [
        'subject_id'  => 40,
        'part'        => 4,
        'question'    => 'Serviceability deflection limit for continuous beams under live load is:',
        'choices'     => json_encode([
            'L/360',
            'L/240',
            'L/180',
            'L/480',
        ]),
        'answer'      => 'L/360',
        'explanation' => 'Deflection under live load is limited to L/360 to control vibrations and finishes.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //11
    [
        'subject_id'  => 40,
        'part'        => 4,
        'question'    => 'Which curing method is most effective in hot, dry climates?',
        'choices'     => json_encode([
            'Wet burlap and plastic sheeting',
            'Ponding',
            'Membrane-forming compound',
            'Continuous sprinkling',
        ]),
        'answer'      => 'Wet burlap and plastic sheeting',
        'explanation' => 'Burlap retains moisture; plastic prevents evaporation in extreme heat.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //12
    [
        'subject_id'  => 40,
        'part'        => 4,
        'question'    => 'Which structural steel grade has the highest minimum yield strength?',
        'choices'     => json_encode([
            'Grade 50',
            'Grade 36',
            'Grade 30',
            'Grade 40',
        ]),
        'answer'      => 'Grade 50',
        'explanation' => 'Grade 50 steel has minimum fy = 345 MPa (50 ksi), higher than Grade 36.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //13
    [
        'subject_id'  => 40,
        'part'        => 4,
        'question'    => 'In prestressed concrete, initial tendon stress is typically about:',
        'choices'     => json_encode([
            '75% of ultimate tensile strength',
            '50% of ultimate',
            '100% of ultimate',
            '25% of ultimate',
        ]),
        'answer'      => '75% of ultimate tensile strength',
        'explanation' => 'Prestress is set at ~0.75 f_pu to balance losses and service loads.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //14
    [
        'subject_id'  => 40,
        'part'        => 4,
        'question'    => 'Which equation governs one‐dimensional heat flow in concrete curing?',
        'choices'     => json_encode([
            'Fourier’s law',
            'Darcy’s law',
            'Newton’s law of cooling',
            'Boussinesq equation',
        ]),
        'answer'      => 'Fourier’s law',
        'explanation' => 'Fourier’s law relates heat flux to temperature gradient during curing.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //15
    [
        'subject_id'  => 40,
        'part'        => 4,
        'question'    => 'Which non-destructive test estimates in-situ concrete strength?',
        'choices'     => json_encode([
            'Rebound hammer test',
            'Pull-off test',
            'Ultrasonic pulse velocity test',
            'Both A and C',
        ]),
        'answer'      => 'Both A and C',
        'explanation' => 'Rebound hammer and UPV both provide indicators of concrete strength nondestructively.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //16
    [
        'subject_id'  => 40,
        'part'        => 4,
        'question'    => 'Which safety factor is applied to dead load in LRFD design?',
        'choices'     => json_encode([
            '1.2',
            '1.4',
            '1.0',
            '1.6',
        ]),
        'answer'      => '1.2',
        'explanation' => 'LRFD dead load factor is 1.2 per NSCP for ultimate load combination.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //17
    [
        'subject_id'  => 40,
        'part'        => 4,
        'question'    => 'Which material is used to seal joints in concrete pavements?',
        'choices'     => json_encode([
            'Polyurethane sealant',
            'Epoxy mortar',
            'Cement grout',
            'Silica fume',
        ]),
        'answer'      => 'Polyurethane sealant',
        'explanation' => 'Polyurethane remains flexible to accommodate joint movement and weathering.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //18
    [
        'subject_id'  => 40,
        'part'        => 4,
        'question'    => 'Which factor most influences formwork stripping time?',
        'choices'     => json_encode([
            'Concrete strength gain',
            'Ambient temperature',
            'Cement type',
            'All of the above',
        ]),
        'answer'      => 'All of the above',
        'explanation' => 'Stripping depends on early strength, which varies with temperature, cement, and mix.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //19
    [
        'subject_id'  => 40,
        'part'        => 4,
        'question'    => 'Which component in concrete prevents rapid moisture loss during placement?',
        'choices'     => json_encode([
            'Plasticizer',
            'Retarder',
            'Water-reducing admixture',
            'Air-entrainer',
        ]),
        'answer'      => 'Retarder',
        'explanation' => 'Retarders slow setting to reduce plastic shrinkage and moisture loss.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //20
    [
        'subject_id'  => 40,
        'part'        => 4,
        'question'    => 'Which design approach uses both strength and service limit states?',
        'choices'     => json_encode([
            'Limit state design',
            'Working stress design',
            'Allowable stress design',
            'Load factor design',
        ]),
        'answer'      => 'Limit state design',
        'explanation' => 'Limit state design checks both ultimate and serviceability conditions.',
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
            $this->command->warn("Part 4 has only {$batchCount} questions. Minimum 20 required.");
        }

        // 3) Abort seeding if duplicates found or insufficient items
        if (!empty($dupes) || $batchCount < 20) {
            $this->command->info("Seeding aborted for part 4. Please resolve duplicates or add more questions.");
            return;
        }

        // 4) Insert all questions if checks pass
        DB::table('questions')->insert($batch);
        $this->command->info("{$batchCount} question(s) seeded for part 4.");
    }
}
