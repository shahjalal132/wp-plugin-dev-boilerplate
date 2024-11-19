<h2 class="admin-menu-title">Admin Sub Menu Contents</h2>

<div class="tab-container">

    <div class="tabs-container common-shadow">

        <div class="tabs">
            <button class="tab active" data-tab="api">API</button>
            <button class="tab" data-tab="options">Options</button>
            <button class="tab" data-tab="endpoints">Endpoints</button>
        </div>
    </div>

    <div class="tabs-contents-container">

        <div class="tab-content" id="api">
            <h4 class="common-title">API Credentials</h4>

            <div class="credentials-wrapper overflow-hidden">
                <div class="common-input-group">
                    <label for="api_url">API Url</label>
                    <input type="text" class="common-form-input" name="api_url" id="api_url" placeholder="API Url"
                        value="" required>
                </div>
                <div class="common-input-group mt-20">
                    <label for="api_key">API Key</label>
                    <input type="text" class="common-form-input" name="api_key" id="api_key" placeholder="API Key"
                        value="" required>
                </div>

                <button type="button" class="save-btn mt-20 button-flex" id="save_credentials">
                    <span>Save</span>
                    <span class=""></span>
                </button>
            </div>
        </div>
        <div class="tab-content" id="options" style="display: none;">
            <h4 class="common-title">Options</h4>

            <div class="options-wrapper">
                <div class="common-input-group">
                    <label for="option1">Option1</label>
                    <input type="text" class="common-form-input" name="option1" id="option1" placeholder="Option1"
                        value="">
                </div>
                <div class="common-input-group mt-20">
                    <label for="option2">Option2</label>
                    <input type="text" class="common-form-input" name="option2" id="option2" placeholder="Option2"
                        value="">
                </div>

                <button type="button" class="save-btn mt-20 button-flex" id="save_options">
                    <span>Save</span>
                    <span class=""></span>
                </button>
            </div>
        </div>
        <div class="tab-content" id="endpoints" style="display: none;">
            <h4 class="common-title">Endpoints</h4>

            <div class="endpoints-wrapper">
                <table class="endpoints-table">
                    <thead>
                        <tr>
                            <th>Endpoint</th>
                            <th>Description</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>/users</td>
                            <td>Get all users</td>
                            <td><button class="copy-button">Copy</button></td>
                        </tr>
                        <tr>
                            <td>/users/{id}</td>
                            <td>Get user by ID</td>
                            <td><button class="copy-button">Copy</button></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</div>