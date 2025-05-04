<?php

namespace Database\Seeders\LET\Majorship\PhysicalScience;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class PhysicalSciencePart9Seeder extends Seeder
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

       // 161
       $batch[] = [
           'subject_id'  => 13,
           'part'        => 9,
           'question'    => "Which type of plate boundary forms mid-ocean ridges?",
           'choices'     => json_encode([
               'Divergent boundary',
               'Convergent boundary',
               'Transform boundary',
               'Hotspot boundary',
           ]),
           'answer'      => 'Divergent boundary',
           'explanation' => 'Divergent boundaries occur where tectonic plates move apart, creating mid-ocean ridges.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 162
       $batch[] = [
           'subject_id'  => 13,
           'part'        => 9,
           'question'    => "Which seismic wave is the fastest and arrives first at a seismic station?",
           'choices'     => json_encode([
               'Primary (P) waves',
               'Secondary (S) waves',
               'Surface waves',
               'Love waves',
           ]),
           'answer'      => 'Primary (P) waves',
           'explanation' => 'P-waves are compressional waves that travel fastest through the Earth’s interior.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 163
       $batch[] = [
           'subject_id'  => 13,
           'part'        => 9,
           'question'    => "What does the Richter scale measure?",
           'choices'     => json_encode([
               'Magnitude of earthquakes',
               'Duration of shaking',
               'Distance to epicenter',
               'Depth of focus',
           ]),
           'answer'      => 'Magnitude of earthquakes',
           'explanation' => 'The Richter scale quantifies earthquake size based on seismic wave amplitude.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 164
       $batch[] = [
           'subject_id'  => 13,
           'part'        => 9,
           'question'    => "Which layer of Earth is liquid according to seismic studies?",
           'choices'     => json_encode([
               'Outer core',
               'Inner core',
               'Lower mantle',
               'Crust',
           ]),
           'answer'      => 'Outer core',
           'explanation' => 'Seismic S-waves do not travel through the outer core, indicating it is liquid.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 165
       $batch[] = [
           'subject_id'  => 13,
           'part'        => 9,
           'question'    => "What is lithification?",
           'choices'     => json_encode([
               'Compaction and cementation of sediments',
               'Melting of rocks',
               'Erosion by water',
               'Metamorphic recrystallization',
           ]),
           'answer'      => 'Compaction and cementation of sediments',
           'explanation' => 'Lithification turns loose sediments into sedimentary rock through compaction and cementation.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 166
       $batch[] = [
           'subject_id'  => 13,
           'part'        => 9,
           'question'    => "Which soil horizon is richest in organic material?",
           'choices'     => json_encode([
               'O horizon',
               'A horizon',
               'B horizon',
               'C horizon',
           ]),
           'answer'      => 'O horizon',
           'explanation' => 'The O horizon is the topmost layer composed mainly of organic matter.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 167
       $batch[] = [
           'subject_id'  => 13,
           'part'        => 9,
           'question'    => "Which atmospheric layer contains the ozone layer?",
           'choices'     => json_encode([
               'Stratosphere',
               'Troposphere',
               'Mesosphere',
               'Thermosphere',
           ]),
           'answer'      => 'Stratosphere',
           'explanation' => 'The stratosphere hosts the ozone layer, which absorbs ultraviolet radiation.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 168
       $batch[] = [
           'subject_id'  => 13,
           'part'        => 9,
           'question'    => "What causes the Coriolis effect on Earth?",
           'choices'     => json_encode([
               'Earth’s rotation',
               'Gravitational pull of sun',
               'Magnetic field',
               'Solar radiation',
           ]),
           'answer'      => 'Earth’s rotation',
           'explanation' => 'The Coriolis effect results from Earth’s rotation, deflecting moving air and water.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 169
       $batch[] = [
           'subject_id'  => 13,
           'part'        => 9,
           'question'    => "Which process drives ocean surface currents?",
           'choices'     => json_encode([
               'Wind',
               'Tides',
               'Temperature gradients',
               'Currents below',
           ]),
           'answer'      => 'Wind',
           'explanation' => 'Wind-driven forces on the ocean surface generate major currents.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 170
       $batch[] = [
           'subject_id'  => 13,
           'part'        => 9,
           'question'    => "What primarily drives thermohaline circulation?",
           'choices'     => json_encode([
               'Density differences from temperature and salinity',
               'Wind stress',
               'Tidal forces',
               'Earth’s rotation',
           ]),
           'answer'      => 'Density differences from temperature and salinity',
           'explanation' => 'Thermohaline circulation is powered by density gradients driven by temperature and salinity.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 171
       $batch[] = [
           'subject_id'  => 13,
           'part'        => 9,
           'question'    => "Which gas makes up about 78% of Earth’s atmosphere?",
           'choices'     => json_encode([
               'Nitrogen',
               'Oxygen',
               'Argon',
               'Carbon dioxide',
           ]),
           'answer'      => 'Nitrogen',
           'explanation' => 'Nitrogen comprises approximately 78% of the atmospheric composition by volume.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 172
       $batch[] = [
           'subject_id'  => 13,
           'part'        => 9,
           'question'    => "What class of clouds is high and wispy, often indicating fair weather?",
           'choices'     => json_encode([
               'Cirrus',
               'Cumulus',
               'Stratus',
               'Nimbostratus',
           ]),
           'answer'      => 'Cirrus',
           'explanation' => 'Cirrus clouds are thin, fibrous clouds composed of ice crystals at high altitudes.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 173
       $batch[] = [
           'subject_id'  => 13,
           'part'        => 9,
           'question'    => "What is an aquifer?",
           'choices'     => json_encode([
               'Permeable rock layer storing groundwater',
               'Surface water reservoir',
               'Water treatment facility',
               'Ocean basin',
           ]),
           'answer'      => 'Permeable rock layer storing groundwater',
           'explanation' => 'Aquifers are underground layers of water-bearing permeable rock or materials.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 174
       $batch[] = [
           'subject_id'  => 13,
           'part'        => 9,
           'question'    => "What is groundwater recharge?",
           'choices'     => json_encode([
               'Infiltration of surface water into aquifers',
               'Withdrawal of water from wells',
               'Evaporation from soil',
               'Runoff into rivers',
           ]),
           'answer'      => 'Infiltration of surface water into aquifers',
           'explanation' => 'Recharge replenishes aquifers through percolation of precipitation and surface water.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 175
       $batch[] = [
           'subject_id'  => 13,
           'part'        => 9,
           'question'    => "Which layer of the atmosphere burns up meteoroids?",
           'choices'     => json_encode([
               'Mesosphere',
               'Troposphere',
               'Stratosphere',
               'Thermosphere',
           ]),
           'answer'      => 'Mesosphere',
           'explanation' => 'Most meteoroids burn up in the mesosphere due to increasing density at that altitude.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 176
       $batch[] = [
           'subject_id'  => 13,
           'part'        => 9,
           'question'    => "What primary force causes ocean tides?",
           'choices'     => json_encode([
               'Gravitational pull of the Moon',
               'Wind',
               'Earth’s rotation',
               'Solar radiation',
           ]),
           'answer'      => 'Gravitational pull of the Moon',
           'explanation' => 'Tidal forces arise mainly from the Moon’s gravitational influence on Earth’s oceans.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 177
       $batch[] = [
           'subject_id'  => 13,
           'part'        => 9,
           'question'    => "What discontinuity marks the boundary between mantle and core?",
           'choices'     => json_encode([
               'Gutenberg discontinuity',
               'Moho discontinuity',
               'Lehmann discontinuity',
               'Conrad discontinuity',
           ]),
           'answer'      => 'Gutenberg discontinuity',
           'explanation' => 'The Gutenberg discontinuity delineates the top of the Earth’s outer core.',
           'created_at'  => $now,
           'updated_at'  => $now
       ];
       
       // 178
       $batch[] = [
           'subject_id'  => 13,
           'part'        => 9,
           'question'    => "Which type of rock forms from cooling magma at the surface?",
           'choices'     => json_encode([
               'Extrusive igneous rock',
               'Intrusive igneous rock',
               'Sedimentary rock',
               'Metamorphic rock',
           ]),
           'answer'      => 'Extrusive igneous rock',
           'explanation' => 'Extrusive rocks like basalt form from rapid cooling of lava on the Earth’s surface.',
           'created_at'  => $now,
           'updated_at'  => $now
       ];
       
       // 179
       $batch[] = [
           'subject_id'  => 13,
           'part'        => 9,
           'question'    => "What drives plate tectonics?",
           'choices'     => json_encode([
               'Mantle convection currents',
               'Solar heating',
               'Ocean tides',
               'Earth’s magnetic field',
           ]),
           'answer'      => 'Mantle convection currents',
           'explanation' => 'Heat-driven convection in the mantle causes the movement of tectonic plates.',
           'created_at'  => $now,
           'updated_at'  => $now
       ];
       
       // 180
       $batch[] = [
           'subject_id'  => 13,
           'part'        => 9,
           'question'    => "What is metamorphism?",
           'choices'     => json_encode([
               'Alteration of rock by heat and pressure',
               'Formation of sedimentary layers',
               'Cooling of magma underground',
               'Erosion by water',
           ]),
           'answer'      => 'Alteration of rock by heat and pressure',
           'explanation' => 'Metamorphism transforms existing rocks under high temperature and pressure conditions.',
           'created_at'  => $now,
           'updated_at'  => $now
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
            $this->command->warn("Part 9 has only {$batchCount} questions. Minimum 20 required.");
        }

        // 3) Abort seeding if duplicates found or insufficient items
        if (!empty($dupes) || $batchCount < 20) {
            $this->command->info("Seeding aborted for part 9. Please resolve duplicates or add more questions.");
            return;
        }

        // 4) Insert all questions if checks pass
        DB::table('questions')->insert($batch);
        $this->command->info("{$batchCount} question(s) seeded for part 9.");
    }
}
