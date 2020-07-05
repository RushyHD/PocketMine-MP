<?php

/*
 *
 *  ____            _        _   __  __ _                  __  __ ____
 * |  _ \ ___   ___| | _____| |_|  \/  (_)_ __   ___      |  \/  |  _ \
 * | |_) / _ \ / __| |/ / _ \ __| |\/| | | '_ \ / _ \_____| |\/| | |_) |
 * |  __/ (_) | (__|   <  __/ |_| |  | | | | | |  __/_____| |  | |  __/
 * |_|   \___/ \___|_|\_\___|\__|_|  |_|_|_| |_|\___|     |_|  |_|_|
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Lesser General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * @author PocketMine Team
 * @link http://www.pocketmine.net/
 *
 *
*/

declare(strict_types=1);

namespace pocketmine\block;

use pocketmine\block\BlockIdentifier as BID;
use pocketmine\block\BlockIdentifierFlattened as BIDFlattened;
use pocketmine\block\BlockLegacyIds as Ids;
use pocketmine\block\tile\Sign as TileSign;
use pocketmine\block\utils\TreeType;
use pocketmine\item\ItemIds;
use pocketmine\utils\AssumptionFailedError;

final class BlockLegacyIdHelper{

	public static function getWoodenSignIdentifier(TreeType $treeType) : BIDFlattened{
		switch($treeType->id()){
			case TreeType::OAK()->id():
				return new BIDFlattened(Ids::SIGN_POST, Ids::WALL_SIGN, 0, ItemIds::SIGN, TileSign::class);
			case TreeType::SPRUCE()->id():
				return new BIDFlattened(Ids::SPRUCE_STANDING_SIGN, Ids::SPRUCE_WALL_SIGN, 0, ItemIds::SPRUCE_SIGN, TileSign::class);
			case TreeType::BIRCH()->id():
				return new BIDFlattened(Ids::BIRCH_STANDING_SIGN, Ids::BIRCH_WALL_SIGN, 0, ItemIds::BIRCH_SIGN, TileSign::class);
			case TreeType::JUNGLE()->id():
				return new BIDFlattened(Ids::JUNGLE_STANDING_SIGN, Ids::JUNGLE_WALL_SIGN, 0, ItemIds::JUNGLE_SIGN, TileSign::class);
			case TreeType::ACACIA()->id():
				return new BIDFlattened(Ids::ACACIA_STANDING_SIGN, Ids::ACACIA_WALL_SIGN, 0, ItemIds::ACACIA_SIGN, TileSign::class);
			case TreeType::DARK_OAK()->id():
				return new BIDFlattened(Ids::DARKOAK_STANDING_SIGN, Ids::DARKOAK_WALL_SIGN, 0, ItemIds::DARKOAK_SIGN, TileSign::class);
		}
		throw new AssumptionFailedError("Switch should cover all wood types");
	}

	public static function getWoodenTrapdoorIdentifier(TreeType $treeType) : BlockIdentifier{
		switch($treeType->id()){
			case TreeType::OAK()->id():
				return new BlockIdentifier(Ids::WOODEN_TRAPDOOR);
			case TreeType::SPRUCE()->id():
				return new BlockIdentifier(Ids::SPRUCE_TRAPDOOR);
			case TreeType::BIRCH()->id():
				return new BlockIdentifier(Ids::BIRCH_TRAPDOOR);
			case TreeType::JUNGLE()->id():
				return new BlockIdentifier(Ids::JUNGLE_TRAPDOOR);
			case TreeType::ACACIA()->id():
				return new BlockIdentifier(Ids::ACACIA_TRAPDOOR);
			case TreeType::DARK_OAK()->id():
				return new BlockIdentifier(Ids::DARK_OAK_TRAPDOOR);
		}
		throw new AssumptionFailedError("Switch should cover all wood types");
	}

	public static function getWoodenButtonIdentifier(TreeType $treeType) : BlockIdentifier{
		switch($treeType->id()){
			case TreeType::OAK()->id():
				return new BlockIdentifier(Ids::WOODEN_BUTTON);
			case TreeType::SPRUCE()->id():
				return new BlockIdentifier(Ids::SPRUCE_BUTTON);
			case TreeType::BIRCH()->id():
				return new BlockIdentifier(Ids::BIRCH_BUTTON);
			case TreeType::JUNGLE()->id():
				return new BlockIdentifier(Ids::JUNGLE_BUTTON);
			case TreeType::ACACIA()->id():
				return new BlockIdentifier(Ids::ACACIA_BUTTON);
			case TreeType::DARK_OAK()->id():
				return new BlockIdentifier(Ids::DARK_OAK_BUTTON);
		}
		throw new AssumptionFailedError("Switch should cover all wood types");
	}

	public static function getWoodenPressurePlateIdentifier(TreeType $treeType) : BlockIdentifier{
		switch($treeType->id()){
			case TreeType::OAK()->id():
				return new BlockIdentifier(Ids::WOODEN_PRESSURE_PLATE);
			case TreeType::SPRUCE()->id():
				return new BlockIdentifier(Ids::SPRUCE_PRESSURE_PLATE);
			case TreeType::BIRCH()->id():
				return new BlockIdentifier(Ids::BIRCH_PRESSURE_PLATE);
			case TreeType::JUNGLE()->id():
				return new BlockIdentifier(Ids::JUNGLE_PRESSURE_PLATE);
			case TreeType::ACACIA()->id():
				return new BlockIdentifier(Ids::ACACIA_PRESSURE_PLATE);
			case TreeType::DARK_OAK()->id():
				return new BlockIdentifier(Ids::DARK_OAK_PRESSURE_PLATE);
		}
		throw new AssumptionFailedError("Switch should cover all wood types");
	}

	public static function getWoodenDoorIdentifier(TreeType $treeType) : BlockIdentifier{
		switch($treeType->id()){
			case TreeType::OAK()->id():
				return new BID(Ids::OAK_DOOR_BLOCK, 0, ItemIds::OAK_DOOR);
			case TreeType::SPRUCE()->id():
				return new BID(Ids::SPRUCE_DOOR_BLOCK, 0, ItemIds::SPRUCE_DOOR);
			case TreeType::BIRCH()->id():
				return new BID(Ids::BIRCH_DOOR_BLOCK, 0, ItemIds::BIRCH_DOOR);
			case TreeType::JUNGLE()->id():
				return new BID(Ids::JUNGLE_DOOR_BLOCK, 0, ItemIds::JUNGLE_DOOR);
			case TreeType::ACACIA()->id():
				return new BID(Ids::ACACIA_DOOR_BLOCK, 0, ItemIds::ACACIA_DOOR);
			case TreeType::DARK_OAK()->id():
				return new BID(Ids::DARK_OAK_DOOR_BLOCK, 0, ItemIds::DARK_OAK_DOOR);
		}
		throw new AssumptionFailedError("Switch should cover all wood types");
	}

	public static function getWoodenFenceIdentifier(TreeType $treeType) : BlockIdentifier{
		switch($treeType->id()){
			case TreeType::OAK()->id():
				return new BlockIdentifier(Ids::OAK_FENCE_GATE);
			case TreeType::SPRUCE()->id():
				return new BlockIdentifier(Ids::SPRUCE_FENCE_GATE);
			case TreeType::BIRCH()->id():
				return new BlockIdentifier(Ids::BIRCH_FENCE_GATE);
			case TreeType::JUNGLE()->id():
				return new BlockIdentifier(Ids::JUNGLE_FENCE_GATE);
			case TreeType::ACACIA()->id():
				return new BlockIdentifier(Ids::ACACIA_FENCE_GATE);
			case TreeType::DARK_OAK()->id():
				return new BlockIdentifier(Ids::DARK_OAK_FENCE_GATE);
		}
		throw new AssumptionFailedError("Switch should cover all wood types");
	}

	public static function getWoodenStairsIdentifier(TreeType $treeType) : BlockIdentifier{
		switch($treeType->id()){
			case TreeType::OAK()->id():
				return new BlockIdentifier(Ids::OAK_STAIRS);
			case TreeType::SPRUCE()->id():
				return new BlockIdentifier(Ids::SPRUCE_STAIRS);
			case TreeType::BIRCH()->id():
				return new BlockIdentifier(Ids::BIRCH_STAIRS);
			case TreeType::JUNGLE()->id():
				return new BlockIdentifier(Ids::JUNGLE_STAIRS);
			case TreeType::ACACIA()->id():
				return new BlockIdentifier(Ids::ACACIA_STAIRS);
			case TreeType::DARK_OAK()->id():
				return new BlockIdentifier(Ids::DARK_OAK_STAIRS);
		}
		throw new AssumptionFailedError("Switch should cover all wood types");
	}
}