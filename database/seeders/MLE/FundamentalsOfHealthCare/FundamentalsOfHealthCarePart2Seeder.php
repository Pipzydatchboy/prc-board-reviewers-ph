<?php

namespace Database\Seeders\MLE\FundamentalsOfHealthCare;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class FundamentalsOfHealthCarePart2Seeder extends Seeder
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
  'subject_id'  => 28,
  'part'        => 2,
  'question'    => 'Which reagent differentiates Gram-positive from Gram-negative bacteria based on cell wall properties?',
  'choices'     => json_encode([
    'Crystal violet and safranin',
    'Methylene blue and eosin',
    'Carbol fuchsin and malachite green',
    'India ink and nigrosin',
  ]),
  'answer'      => 'Crystal violet and safranin',
  'explanation' => 'Gram staining uses crystal violet as primary dye and safranin as counterstain to differentiate bacteria by cell wall thickness.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 2
$batch[] = [
  'subject_id'  => 28,
  'part'        => 2,
  'question'    => 'Which culture medium is selective for Gram-negative enteric bacteria?',
  'choices'     => json_encode([
    'MacConkey agar',
    'Blood agar',
    'Chocolate agar',
    'Mannitol salt agar',
  ]),
  'answer'      => 'MacConkey agar',
  'explanation' => 'MacConkey agar contains bile salts and crystal violet to inhibit Gram-positive and select for enteric Gram-negative bacteria.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 3
$batch[] = [
  'subject_id'  => 28,
  'part'        => 2,
  'question'    => 'What is the minimum duration recommended for hand rubbing with alcohol-based formulation?',
  'choices'     => json_encode([
    '20 seconds',
    '5 seconds',
    '10 seconds',
    '1 minute',
  ]),
  'answer'      => '20 seconds',
  'explanation' => 'World Health Organization recommends 20 seconds of hand rubbing to ensure effective microbial removal.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 4
$batch[] = [
  'subject_id'  => 28,
  'part'        => 2,
  'question'    => 'Which sterilization method uses pressurized steam to achieve microbial kill?',
  'choices'     => json_encode([
    'Autoclaving',
    'Ethylene oxide',
    'Dry heat oven',
    'Ultraviolet irradiation',
  ]),
  'answer'      => 'Autoclaving',
  'explanation' => 'Autoclaving at 121°C and 15 psi for 15 minutes is standard for sterilizing heat-stable medical instruments.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 5
$batch[] = [
  'subject_id'  => 28,
  'part'        => 2,
  'question'    => 'Which personal protective equipment is essential when handling bodily fluids?',
  'choices'     => json_encode([
    'Gloves',
    'Shoe covers',
    'Hair net',
    'Goggles only',
  ]),
  'answer'      => 'Gloves',
  'explanation' => 'Gloves prevent transmission of pathogens via contact with blood and body fluids and are part of standard precautions.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 6
$batch[] = [
  'subject_id'  => 28,
  'part'        => 2,
  'question'    => 'What is the recommended daily iron requirement for pregnant women to prevent anemia?',
  'choices'     => json_encode([
    '30 mg elemental iron',
    '10 mg elemental iron',
    '60 mg elemental iron',
    '100 mg elemental iron',
  ]),
  'answer'      => '30 mg elemental iron',
  'explanation' => 'WHO recommends 30–60 mg of elemental iron daily during pregnancy to meet increased needs and prevent anemia.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 7
$batch[] = [
  'subject_id'  => 28,
  'part'        => 2,
  'question'    => 'Which vitamin deficiency is associated with scurvy, presenting with gum bleeding and poor wound healing?',
  'choices'     => json_encode([
    'Vitamin C',
    'Vitamin D',
    'Vitamin B12',
    'Vitamin A',
  ]),
  'answer'      => 'Vitamin C',
  'explanation' => 'Vitamin C is necessary for collagen synthesis; its deficiency causes scurvy with hemorrhagic manifestations.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 8
$batch[] = [
  'subject_id'  => 28,
  'part'        => 2,
  'question'    => 'Which body mass index range defines obesity in adults?',
  'choices'     => json_encode([
    '≥30 kg/m²',
    '25–29.9 kg/m²',
    '18.5–24.9 kg/m²',
    '<18.5 kg/m²',
  ]),
  'answer'      => '≥30 kg/m²',
  'explanation' => 'Obesity is defined by BMI of 30 or higher, indicating increased health risk.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 9
$batch[] = [
  'subject_id'  => 28,
  'part'        => 2,
  'question'    => 'Which water treatment method is most effective against chlorine-resistant pathogens?',
  'choices'     => json_encode([
    'Ultraviolet disinfection',
    'Boiling',
    'Gravity sedimentation',
    'Chlorination',
  ]),
  'answer'      => 'Ultraviolet disinfection',
  'explanation' => 'UV light inactivates microorganisms by damaging their nucleic acids, effective against chlorine-resistant species.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 10
$batch[] = [
  'subject_id'  => 28,
  'part'        => 2,
  'question'    => 'What is the first aid management for a thermal burn?',
  'choices'     => json_encode([
    'Cool the burn with running water for 20 minutes',
    'Apply butter or oil',
    'Cover with dry cloth only',
    'Use ice packs directly',
  ]),
  'answer'      => 'Cool the burn with running water for 20 minutes',
  'explanation' => 'Immediate cooling with water reduces tissue damage; ice and substances like butter are contraindicated.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 11
$batch[] = [
  'subject_id'  => 28,
  'part'        => 2,
  'question'    => 'Which diagnostic method is used for pinworm detection?',
  'choices'     => json_encode([
    'Cellophane tape test',
    'Stool culture',
    'Blood smear',
    'Skin biopsy',
  ]),
  'answer'      => 'Cellophane tape test',
  'explanation' => 'The tape test collects pinworm eggs from the perianal area for microscopic identification.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 12
$batch[] = [
  'subject_id'  => 28,
  'part'        => 2,
  'question'    => 'Which organism is the vector for malaria transmission to humans?',
  'choices'     => json_encode([
    'Anopheles mosquito',
    'Aedes mosquito',
    'Tsetse fly',
    'Sandfly',
  ]),
  'answer'      => 'Anopheles mosquito',
  'explanation' => 'Female Anopheles mosquitoes transmit Plasmodium parasites causing malaria.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 13
$batch[] = [
  'subject_id'  => 28,
  'part'        => 2,
  'question'    => 'Which pregnancy drug category indicates positive evidence of human fetal risk but benefits may warrant use?',
  'choices'     => json_encode([
    'Category D',
    'Category A',
    'Category B',
    'Category X',
  ]),
  'answer'      => 'Category D',
  'explanation' => 'Category D drugs have evidence of risk, but may be used if maternal benefit justifies potential fetal risk.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 14
$batch[] = [
  'subject_id'  => 28,
  'part'        => 2,
  'question'    => 'What does drug half-life represent in pharmacokinetics?',
  'choices'     => json_encode([
    'Time for plasma concentration to reduce by half',
    'Time to reach peak concentration',
    'Duration of drug action',
    'Time for drug absorption',
  ]),
  'answer'      => 'Time for plasma concentration to reduce by half',
  'explanation' => 'Half-life is the time required for the drug concentration in plasma to decrease by 50%.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 15
$batch[] = [
  'subject_id'  => 28,
  'part'        => 2,
  'question'    => 'Which injection angle is recommended for intramuscular administration?',
  'choices'     => json_encode([
    '90 degrees',
    '45 degrees',
    '15 degrees',
    '30 degrees',
  ]),
  'answer'      => '90 degrees',
  'explanation' => 'IM injections are given at 90° to ensure penetration into muscle tissue.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 16
$batch[] = [
  'subject_id'  => 28,
  'part'        => 2,
  'question'    => 'Which teaching method involves asking the learner to repeat information in their own words?',
  'choices'     => json_encode([
    'Teach-back method',
    'Didactic lecture',
    'Role play',
    'Demonstration only',
  ]),
  'answer'      => 'Teach-back method',
  'explanation' => 'Teach-back confirms understanding by having the patient explain the information back to the provider.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 17
$batch[] = [
  'subject_id'  => 28,
  'part'        => 2,
  'question'    => 'In the stages of change model, which stage involves preparing to take action?',
  'choices'     => json_encode([
    'Preparation',
    'Precontemplation',
    'Contemplation',
    'Maintenance',
  ]),
  'answer'      => 'Preparation',
  'explanation' => 'Preparation is the stage where individuals intend to take action soon and may begin small steps.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 18
$batch[] = [
  'subject_id'  => 28,
  'part'        => 2,
  'question'    => 'Primary health care emphasizes which principle to ensure services meet population needs?',
  'choices'     => json_encode([
    'Accessibility',
    'Complex tertiary care',
    'High technology focus',
    'Specialist-only services',
  ]),
  'answer'      => 'Accessibility',
  'explanation' => 'Primary health care ensures services are accessible to individuals and communities.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 19
$batch[] = [
  'subject_id'  => 28,
  'part'        => 2,
  'question'    => 'Which level of health care involves management of complicated cases referred from primary care?',
  'choices'     => json_encode([
    'Secondary care',
    'Primary care',
    'Tertiary care',
    'Quaternary care',
  ]),
  'answer'      => 'Secondary care',
  'explanation' => 'Secondary care provides specialist services typically in hospitals for referred patients.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 20
$batch[] = [
  'subject_id'  => 28,
  'part'        => 2,
  'question'    => 'Which level of health care involves highly specialized consultative care provided in teaching hospitals?',
  'choices'     => json_encode([
    'Tertiary care',
    'Primary care',
    'Secondary care',
    'Quaternary care',
  ]),
  'answer'      => 'Tertiary care',
  'explanation' => 'Tertiary care involves specialized consultative care usually on referral from primary or secondary medical care personnel, often in teaching hospitals.',
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
