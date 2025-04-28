<?php function renderSummaryCard($title, $amount, $iconClass, $iconBgClass, $percentage)
{ ?>
    <div class="bg-white rounded-lg shadow-sm p-4">
        <div class="flex justify-between items-start mb-4">
            <div>
                <p class="text-sm text-gray-500"><?php echo $title; ?></p>
                <h3 class="text-xl font-bold text-primary"><?php echo $amount; ?></h3>
            </div>
            <div class="p-2 rounded-full <?php echo $iconBgClass; ?> bg-opacity-10">
                <i class="<?php echo $iconClass; ?>"></i>
            </div>
        </div>
        <p class="text-xs text-gray-500"><?php echo $percentage; ?> from last month</p>
    </div>
<?php } ?>