SELECT jobs.jobNumber, jobs.customerID, logins.FirstName AS clientFirstName, logins.LastName AS clientLastName, 
contractors.contractorID, contractors.businessName AS contractorAssigned, contractors.phoneNumber AS contractorContactNumber,
jobs.jobType, jobs.jobDescription, jobs.jobStatus, jobs.progressNotes, jobs.lastUpdateDateTime
FROM jobs
INNER JOIN logins
ON jobs.customerID=logins.ID
LEFT JOIN contractors
ON jobs.contractorID=contractors.contractorID
ORDER BY jobs.jobNumber;
