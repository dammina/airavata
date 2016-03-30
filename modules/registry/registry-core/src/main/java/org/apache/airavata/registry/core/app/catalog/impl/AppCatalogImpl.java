/*
 *
 * Licensed to the Apache Software Foundation (ASF) under one
 * or more contributor license agreements.  See the NOTICE file
 * distributed with this work for additional information
 * regarding copyright ownership.  The ASF licenses this file
 * to you under the Apache License, Version 2.0 (the
 * "License"); you may not use this file except in compliance
 * with the License.  You may obtain a copy of the License at
 *
 *   http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing,
 * software distributed under the License is distributed on an
 * "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY
 * KIND, either express or implied.  See the License for the
 * specific language governing permissions and limitations
 * under the License.
 *
 */

package org.apache.airavata.registry.core.app.catalog.impl;


import org.apache.airavata.registry.core.workflow.catalog.impl.WorkflowCatalogImpl;
import org.apache.airavata.registry.cpi.*;

public class AppCatalogImpl implements AppCatalog {

    @Override
    public ComputeResource getComputeResource() {
        return new ComputeResourceImpl();
    }

    @Override
    public StorageResource getStorageResource() throws AppCatalogException {
        return new StorageResourceImpl();
    }

    @Override
    public ApplicationInterface getApplicationInterface() {
        return new ApplicationInterfaceImpl();
    }

    @Override
    public ApplicationDeployment getApplicationDeployment() {
        return new ApplicationDeploymentImpl();
    }

    @Override
	public GwyResourceProfile getGatewayProfile() throws AppCatalogException {
		return new GwyResourceProfileImpl();
	}

    @Override
    public GwyClientCredential getGatewayClientCredential() throws AppCatalogException {
        return new GwyClientCredentialImpl();
    }

    @Override
    public WorkflowCatalog getWorkflowCatalog() throws AppCatalogException {
        return new WorkflowCatalogImpl();
    }
}