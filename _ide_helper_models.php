<?php

// @formatter:off
// phpcs:ignoreFile
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property int $vacation_id
 * @property int $user_id
 * @property int|null $parent_id
 * @property string $content
 * @property string|null $attachment
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Database\Factories\CommentFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Comment newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Comment newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Comment query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Comment whereAttachment($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Comment whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Comment whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Comment whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Comment whereParentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Comment whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Comment whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Comment whereVacationId($value)
 * @mixin \Eloquent
 */
	#[\AllowDynamicProperties]
	class IdeHelperComment {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $name
 * @property int $department_type_id
 * @property int|null $parent_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Database\Factories\DepartmentFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Department newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Department newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Department query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Department whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Department whereDepartmentTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Department whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Department whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Department whereParentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Department whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	#[\AllowDynamicProperties]
	class IdeHelperDepartment {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Database\Factories\DepartmentTypeFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DepartmentType newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DepartmentType newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DepartmentType query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DepartmentType whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DepartmentType whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DepartmentType whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DepartmentType whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	#[\AllowDynamicProperties]
	class IdeHelperDepartmentType {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $name
 * @property int|null $parent_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Database\Factories\TitleFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Title newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Title newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Title query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Title whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Title whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Title whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Title whereParentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Title whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	#[\AllowDynamicProperties]
	class IdeHelperTitle {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $name
 * @property string|null $phone_number
 * @property string|null $email
 * @property string $user_name
 * @property int|null $title_id
 * @property int|null $department_id
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection<int, \Illuminate\Notifications\DatabaseNotification> $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Spatie\Permission\Models\Permission> $permissions
 * @property-read int|null $permissions_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Spatie\Permission\Models\Role> $roles
 * @property-read int|null $roles_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Laravel\Sanctum\PersonalAccessToken> $tokens
 * @property-read int|null $tokens_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Vacation> $vacation
 * @property-read int|null $vacation_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\VacationBalance> $vacationBalance
 * @property-read int|null $vacation_balance_count
 * @method static \Database\Factories\UserFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User permission($permissions, $without = false)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User role($roles, $guard = null, $without = false)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereDepartmentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User wherePhoneNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereTitleId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereUserName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User withoutPermission($permissions)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User withoutRole($roles, $guard = null)
 * @mixin \Eloquent
 */
	#[\AllowDynamicProperties]
	class IdeHelperUser {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property int $user_id
 * @property int $vacation_type_id
 * @property string $start_date
 * @property string $end_date
 * @property int $old_balance
 * @property int $new_balance
 * @property int $status_id
 * @property string|null $notes
 * @property int|null $response_id
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\VacationStatus $status
 * @property-read \App\Models\User $user
 * @property-read \App\Models\VacationType $vacationType
 * @method static \Database\Factories\VacationFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Vacation newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Vacation newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Vacation onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Vacation query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Vacation whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Vacation whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Vacation whereEndDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Vacation whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Vacation whereNewBalance($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Vacation whereNotes($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Vacation whereOldBalance($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Vacation whereResponseId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Vacation whereStartDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Vacation whereStatusId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Vacation whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Vacation whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Vacation whereVacationTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Vacation withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Vacation withoutTrashed()
 * @mixin \Eloquent
 */
	#[\AllowDynamicProperties]
	class IdeHelperVacation {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property int $user_id
 * @property int $vacation_type_id
 * @property int $balance
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\User $user
 * @method static \Database\Factories\VacationBalanceFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|VacationBalance newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|VacationBalance newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|VacationBalance query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|VacationBalance whereBalance($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|VacationBalance whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|VacationBalance whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|VacationBalance whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|VacationBalance whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|VacationBalance whereVacationTypeId($value)
 * @mixin \Eloquent
 */
	#[\AllowDynamicProperties]
	class IdeHelperVacationBalance {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Vacation> $vacation
 * @property-read int|null $vacation_count
 * @method static \Database\Factories\VacationStatusFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|VacationStatus newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|VacationStatus newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|VacationStatus query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|VacationStatus whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|VacationStatus whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|VacationStatus whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|VacationStatus whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	#[\AllowDynamicProperties]
	class IdeHelperVacationStatus {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $name
 * @property string|null $description
 * @property bool $incremented
 * @property int|null $increment_days
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Vacation> $vacation
 * @property-read int|null $vacation_count
 * @method static \Database\Factories\VacationTypeFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|VacationType newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|VacationType newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|VacationType query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|VacationType whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|VacationType whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|VacationType whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|VacationType whereIncrementDays($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|VacationType whereIncremented($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|VacationType whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|VacationType whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	#[\AllowDynamicProperties]
	class IdeHelperVacationType {}
}

