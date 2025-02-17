<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\VicidialUsersRepository")
 * @ORM\Table(name="vicidial_users")
 */
class VicidialUsers
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer", options={"unsigned": true})
     */
    private $userId;

    /**
     * @ORM\Column(type="string", length=20)
     */
    private $user;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $pass;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $fullName;

    /**
     * @ORM\Column(type="smallint", nullable=true, options={"unsigned": true})
     */
    private $userLevel;

    /**
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    private $userGroup;

    /**
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    private $phoneLogin;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $phonePass;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $deleteUsers;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $deleteUserGroups;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $deleteLists;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $deleteCampaigns;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $deleteIngroups;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $deleteRemoteAgents;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $loadLeads;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $campaignDetail;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $astAdminAccess;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $astDeletePhones;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $deleteScripts;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $modifyLeads;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $hotkeysActive;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $changeAgentCampaign;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $agentChooseIngroups;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $closerCampaigns;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $scheduledCallbacks;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $agentonlyCallbacks;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $agentcallManual;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $vicidialRecording;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $vicidialTransfers;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $deleteFilters;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $alterAgentInterfaceOptions;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $closerDefaultBlended;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $deleteCallTimes;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $modifyCallTimes;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $modifyUsers;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $modifyCampaigns;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $modifyLists;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $modifyScripts;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $modifyFilters;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $modifyIngroups;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $modifyUsergroups;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $modifyRemoteagents;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $modifyServers;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $viewReports;

    /**
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    private $vicidialRecordingOverride;

    /**
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    private $alterCustdataOverride;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $qcEnabled;

    /**
     * @ORM\Column(type="smallint", nullable=true)
     */
    private $qcUserLevel;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $qcPass;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $qcFinish;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $qcCommit;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $addTimeclockLog;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $modifyTimeclockLog;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $deleteTimeclockLog;

    /**
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    private $alterCustphoneOverride;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $vdcAgentApiAccess;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $modifyInboundDids;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $deleteInboundDids;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $active;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $alertEnabled;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $downloadLists;

    /**
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    private $agentShiftEnforcementOverride;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $managerShiftEnforcementOverride;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $shiftOverrideFlag;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $exportReports;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $deleteFromDnc;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $email;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $userCode;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $territory;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $allowAlerts;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $agentChooseTerritories;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $customOne;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $customTwo;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $customThree;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $customFour;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $customFive;

    /**
     * @ORM\Column(type="string", length=10, nullable=true)
     */
    private $voicemailId;

    /**
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    private $agentCallLogViewOverride;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $callcardAdmin;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $agentChooseBlended;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $realtimeBlockUserInfo;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $customFieldsModify;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $forceChangePassword;

    /**
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    private $agentLeadSearchOverride;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $modifyShifts;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $modifyPhones;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $modifyCarriers;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $modifyLabels;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $modifyStatuses;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $modifyVoicemail;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $modifyAudiostore;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $modifyMoh;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $modifyTts;

    /**
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    private $presetContactSearch;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $modifyContacts;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $modifySameUserLevel;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $adminHideLeadData;

    /**
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    private $adminHidePhoneData;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $agentcallEmail;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $modifyEmailAccounts;

    /**
     * @ORM\Column(type="smallint", nullable=true, options={"unsigned": true})
     */
    private $failedLoginCount;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $lastLoginDate;

    /**
     * @ORM\Column(type="string", length=15, nullable=true)
     */
    private $lastIp;

    /**
     * @ORM\Column(type="string", length=500, nullable=true)
     */
    private $passHash;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $alterAdminInterfaceOptions;

    /**
     * @ORM\Column(type="smallint", nullable=true, options={"unsigned": true})
     */
    private $maxInboundCalls;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $modifyCustomDialplans;

    /**
     * @ORM\Column(type="smallint", nullable=true)
     */
    private $wrapupSecondsOverride;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $modifyLanguages;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $selectedLanguage;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $userChooseLanguage;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $ignoreGroupOnSearch;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $apiListRestrict;

    /**
     * @ORM\Column(type="string", length=1000, nullable=true)
     */
    private $apiAllowedFunctions;

    /**
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    private $leadFilterId;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $adminCfShowHidden;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $agentcallChat;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $userHideRealtime;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $accessRecordings;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $modifyColors;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $userNickname;

    /**
     * @ORM\Column(type="smallint", nullable=true)
     */
    private $userNewLeadLimit;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $apiOnlyUser;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $modifyAutoReports;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $modifyIpLists;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $ignoreIpList;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $readyMaxLogout;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $exportGdprLeads;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $pauseCodeApproval;

    /**
     * @ORM\Column(type="smallint", nullable=true, options={"unsigned": true})
     */
    private $maxHopperCalls;

    /**
     * @ORM\Column(type="smallint", nullable=true, options={"unsigned": true})
     */
    private $maxHopperCallsHour;

    /**
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    private $muteRecordings;

    /**
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    private $hideCallLogInfo;

    /**
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    private $nextDialMyCallbacks;
    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $userAdminRedirectUrl;
    /**
     * @ORM\Column(type="text", nullable=true)
     */
     private $maxInboundFilter_enabled;
      /**
     * @ORM\Column(type="text", nullable=true)
     */
     private $maxInboundFilterStatuses;
      /**
     * @ORM\Column(type="text", nullable=true)
     */
     private $maxInboundFilterIngroups;
     /**
     * @ORM\Column(type="smallint", nullable=true)
     */
     private $maxInboundFilterMinSec;
     /**
     * @ORM\Column(type="text", nullable=true)
     */
     private $statusGroupId;
     /**
     * @ORM\Column(type="text", nullable=true)
     */
     private $mobileNumber;
      /**
     * @ORM\Column(type="string", length=1, nullable=true)
     * @Assert\Choice({'NOT_ACTIVE', 'ENABLED', 'DISABLED'})
     */
     private $twoFactorOverride;
     /**
     * @ORM\Column(type="text", nullable=true)
     */
     private $manualDialFilter;
     /**
     * @ORM\Column(type="text", nullable=true)
     */
     private $userLocation;
     /**
     * @ORM\Column(type="string", length=1, nullable=true)
     * @Assert\Choice({"0", "1"})
     */
     private $downloadInvalidFiles;
     /**
     * @ORM\Column(type="text", nullable=true)
     */
     private $userGroupTwo;
     /**
     * @ORM\Column(type="text", nullable=true)
     */
     private $failedLoginAttemptsToday;
     /**
     * @ORM\Column(type="text", nullable=true)
     */
     private $failedLoginCountToday;
     /**
     * @ORM\Column(type="text", nullable=true)
     */
     private $failedLastIpToday;
     /**
     * @ORM\Column(type="text", nullable=true)
     */
     private $failedLast_type_today;
     /**
     * @ORM\Column(type="text", nullable=true)
     */
     private $modifyDialPrefix;
      /**
     * @ORM\Column(type="string", length=1, nullable=true)
     * @Assert\Choice({"0","1", "2","3","4","5","6"})
     */
     private $inboundCredits;
     /**
     * @ORM\Column(type="string", length=1, nullable=true)
     * @Assert\Choice({"1", "2","3","4","5","6"})
     */
     private $hciEnabled;


}
