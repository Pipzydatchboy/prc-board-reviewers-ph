<?php

namespace Database\Seeders\LET\Majorship\PhysicalScience;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class PhysicalSciencePart10Seeder extends Seeder
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

// 181
$batch[] = [
    'subject_id'  => 13,
    'part'        => 10,
    'question'    => "Which planet has the greatest mass in our solar system?",
    'choices'     => json_encode([
        'Jupiter',
        'Saturn',
        'Earth',
        'Neptune',
    ]),
    'answer'      => 'Jupiter',
    'explanation' => 'Jupiter is the largest planet by mass, comprising over 70% of the solar system’s planetary mass.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 182
$batch[] = [
    'subject_id'  => 13,
    'part'        => 10,
    'question'    => "What type of galaxy is the Milky Way?",
    'choices'     => json_encode([
        'Spiral galaxy',
        'Elliptical galaxy',
        'Irregular galaxy',
        'Lenticular galaxy',
    ]),
    'answer'      => 'Spiral galaxy',
    'explanation' => 'The Milky Way has a barred spiral structure with multiple arms.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 183
$batch[] = [
    'subject_id'  => 13,
    'part'        => 10,
    'question'    => "Which stellar classification corresponds to the hottest stars?",
    'choices'     => json_encode([
        'O-type',
        'G-type',
        'M-type',
        'K-type',
    ]),
    'answer'      => 'O-type',
    'explanation' => 'O-type stars have surface temperatures above 30,000 K, making them the hottest.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 184
$batch[] = [
    'subject_id'  => 13,
    'part'        => 10,
    'question'    => "What is a light-year a measure of?",
    'choices'     => json_encode([
        'Distance',
        'Time',
        'Luminosity',
        'Mass',
    ]),
    'answer'      => 'Distance',
    'explanation' => 'A light-year is the distance light travels in one Julian year (~9.46×10¹² km).',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 185
$batch[] = [
    'subject_id'  => 13,
    'part'        => 10,
    'question'    => "Which phenomenon provides evidence for the Big Bang?",
    'choices'     => json_encode([
        'Cosmic microwave background radiation',
        'Solar wind',
        'Auroras',
        'Zodiacal light',
    ]),
    'answer'      => 'Cosmic microwave background radiation',
    'explanation' => 'The CMB is relic radiation from the early, hot universe, a key Big Bang prediction.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 186
$batch[] = [
    'subject_id'  => 13,
    'part'        => 10,
    'question'    => "Hubble's Law relates a galaxy's recessional velocity to its: ",
    'choices'     => json_encode([
        'Distance',
        'Luminosity',
        'Mass',
        'Temperature',
    ]),
    'answer'      => 'Distance',
    'explanation' => 'Hubble’s law: v = H₀ d, meaning recessional velocity is proportional to distance.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 187
$batch[] = [
    'subject_id'  => 13,
    'part'        => 10,
    'question'    => "Dark matter is theorized to explain: ",
    'choices'     => json_encode([
        'Galaxy rotation curves',
        'Solar neutrino flux',
        'Comet tails',
        'Sunspot cycles',
    ]),
    'answer'      => 'Galaxy rotation curves',
    'explanation' => 'Flat rotation curves of galaxies require unseen mass, attributed to dark matter.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 188
$batch[] = [
    'subject_id'  => 13,
    'part'        => 10,
    'question'    => "Which layer of Earth's atmosphere contains the ozone layer?",
    'choices'     => json_encode([
        'Stratosphere',
        'Troposphere',
        'Mesosphere',
        'Thermosphere',
    ]),
    'answer'      => 'Stratosphere',
    'explanation' => 'Ozone molecules accumulate in the stratosphere, absorbing harmful UV radiation.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 189
$batch[] = [
    'subject_id'  => 13,
    'part'        => 10,
    'question'    => "What is the primary cause of the greenhouse effect?",
    'choices'     => json_encode([
        'Infrared trapping by atmospheric gases',
        'UV absorption by ozone',
        'Albedo of ice caps',
        'Solar wind interaction',
    ]),
    'answer'      => 'Infrared trapping by atmospheric gases',
    'explanation' => 'Greenhouse gases absorb and re-radiate infrared, warming Earth’s surface.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 190
$batch[] = [
    'subject_id'  => 13,
    'part'        => 10,
    'question'    => "Which gas contributes most to anthropogenic global warming?",
    'choices'     => json_encode([
        'Carbon dioxide (CO₂)',
        'Methane (CH₄)',
        'Nitrous oxide (N₂O)',
        'Ozone (O₃)',
    ]),
    'answer'      => 'Carbon dioxide (CO₂)',
    'explanation' => 'CO₂ is the largest contributor to human-induced greenhouse gas emissions.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 191
$batch[] = [
    'subject_id'  => 13,
    'part'        => 10,
    'question'    => "Acid rain primarily results from atmospheric reactions of sulfur dioxide and: ",
    'choices'     => json_encode([
        'Nitrogen oxides',
        'Ozone',
        'Carbon monoxide',
        'Methane',
    ]),
    'answer'      => 'Nitrogen oxides',
    'explanation' => 'SO₂ and NOₓ form sulfuric and nitric acids, leading to acid precipitation.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 192
$batch[] = [
    'subject_id'  => 13,
    'part'        => 10,
    'question'    => "Which biome is characterized by permafrost and minimal vegetation?",
    'choices'     => json_encode([
        'Tundra',
        'Taiga',
        'Savanna',
        'Temperate forest',
    ]),
    'answer'      => 'Tundra',
    'explanation' => 'Arctic tundra has frozen subsoil and supports low-lying plants and lichens.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 193
$batch[] = [
    'subject_id'  => 13,
    'part'        => 10,
    'question'    => "Which renewable energy source harnesses Earth's heat?",
    'choices'     => json_encode([
        'Geothermal',
        'Solar photovoltaic',
        'Wind',
        'Hydroelectric',
    ]),
    'answer'      => 'Geothermal',
    'explanation' => 'Geothermal energy utilizes heat from Earth’s interior for power and heating.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 194
$batch[] = [
    'subject_id'  => 13,
    'part'        => 10,
    'question'    => "What is the main driver of ocean currents?",
    'choices'     => json_encode([
        'Wind and density differences',
        'Earthquakes',
        'Tectonic uplift',
        'Solar flares',
    ]),
    'answer'      => 'Wind and density differences',
    'explanation' => 'Surface currents are wind-driven; deep currents arise from temperature and salinity gradients.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 195
$batch[] = [
    'subject_id'  => 13,
    'part'        => 10,
    'question'    => "What process converts nitrogen gas to ammonia biologically?",
    'choices'     => json_encode([
        'Nitrogen fixation',
        'Denitrification',
        'Nitrification',
        'Ammonification',
    ]),
    'answer'      => 'Nitrogen fixation',
    'explanation' => 'Nitrogen fixation by bacteria converts N₂ into biologically usable NH₃.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 196
$batch[] = [
    'subject_id'  => 13,
    'part'        => 10,
    'question'    => "Which phenomenon describes seasonal shifts in wind patterns and precipitation in South Asia?",
    'choices'     => json_encode([
        'Monsoon',
        'El Niño',
        'La Niña',
        'Trade winds',
    ]),
    'answer'      => 'Monsoon',
    'explanation' => 'Monsoons are seasonal wind reversals causing wet and dry seasons.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 197
$batch[] = [
    'subject_id'  => 13,
    'part'        => 10,
    'question'    => "What is the term for the variety of life in a given ecosystem?",
    'choices'     => json_encode([
        'Biodiversity',
        'Biomagnification',
        'Bioaccumulation',
        'Biogeography',
    ]),
    'answer'      => 'Biodiversity',
    'explanation' => 'Biodiversity refers to the richness of species within an ecosystem.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 198
$batch[] = [
    'subject_id'  => 13,
    'part'        => 10,
    'question'    => "Which practice conserves soil by alternately planting crops?",
    'choices'     => json_encode([
        'Crop rotation',
        'Monoculture farming',
        'Slash-and-burn',
        'Clear-cutting',
    ]),
    'answer'      => 'Crop rotation',
    'explanation' => 'Rotating crops reduces soil depletion and pest buildup.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 199
$batch[] = [
    'subject_id'  => 13,
    'part'        => 10,
    'question'    => "Which international agreement aims to reduce ozone-depleting substances?",
    'choices'     => json_encode([
        'Montreal Protocol',
        'Kyoto Protocol',
        'Paris Agreement',
        'Biodiversity Convention',
    ]),
    'answer'      => 'Montreal Protocol',
    'explanation' => 'The Montreal Protocol phases out CFCs and other ozone-depleting chemicals.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 200
$batch[] = [
    'subject_id'  => 13,
    'part'        => 10,
    'question'    => "Which greenhouse gas has the highest global warming potential per molecule?",
    'choices'     => json_encode([
        'Sulfur hexafluoride (SF₆)',
        'Carbon dioxide (CO₂)',
        'Methane (CH₄)',
        'Nitrous oxide (N₂O)',
    ]),
    'answer'      => 'Sulfur hexafluoride (SF₆)',
    'explanation' => 'SF₆ has a GWP thousands of times greater than CO₂ on a per-molecule basis.',
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
