# Simple Role Syntax
# ==================
# Supports bulk-adding hosts to roles, the primary
# server in each group is considered to be the first
# unless any hosts have the primary property set.
# Don't declare `role :all`, it's a meta role
role :app, %w{briansw@briansw.net}
role :web, %w{briansw@briansw.net}
role :db,  %w{briansw@briansw.net}

# Extended Server Syntax
# ======================
# This can be used to drop a more detailed server
# definition into the server list. The second argument
# something that quacks like a hash can be used to set
# extended properties on the server.
server 'briansw.net', user: 'briansw', roles: %w{web app}

set :deploy_to, '/home/briansw/ci.bw.com'
set :branch, :dev